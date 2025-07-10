import { useState } from 'react';
import { supabase } from '@/integrations/supabase/client';
import { BlogPost, ContentSection } from '@/types/supabase-blog';

export const useAdminOperations = () => {
  const [isLoading, setIsLoading] = useState(false);

  const updateBlogPost = async (id: string, updates: Partial<BlogPost>) => {
    setIsLoading(true);
    try {
      console.log('[useAdminOperations] Starting update for post:', id);
      console.log('[useAdminOperations] Updates:', updates);

      // Convert ContentSection[] to Json for Supabase and include all SEO fields
      const supabaseUpdates = {
        ...updates,
        content: updates.content ? JSON.parse(JSON.stringify(updates.content)) : undefined,
        // Ensure all SEO fields are included (null values will be handled by COALESCE in SQL)
        custom_title: updates.custom_title || null,
        custom_description: updates.custom_description || null,
        custom_keywords: updates.custom_keywords || null,
        og_title: updates.og_title || null,
        og_description: updates.og_description || null,
        og_image: updates.og_image || null,
        twitter_title: updates.twitter_title || null,
        twitter_description: updates.twitter_description || null,
        twitter_image: updates.twitter_image || null
      };

      // Use RPC function to bypass RLS for admin operations
      const { error } = await supabase.rpc('admin_update_blog_post', {
        post_id: id,
        updates: supabaseUpdates
      });

      if (error) {
        console.error('[useAdminOperations] RPC error:', error);
        throw error;
      }

      console.log('[useAdminOperations] Update successful');
      return { success: true };
    } catch (error) {
      console.error('[useAdminOperations] Update failed:', error);
      throw error;
    } finally {
      setIsLoading(false);
    }
  };

  const createBlogPost = async (postData: Partial<BlogPost>) => {
    setIsLoading(true);
    try {
      console.log('[useAdminOperations] Creating new post:', postData);

      // Convert ContentSection[] to Json for Supabase and include all SEO fields
      const supabasePostData = {
        title: postData.title!,
        slug: postData.slug!,
        excerpt: postData.excerpt || null,
        content: postData.content ? JSON.parse(JSON.stringify(postData.content)) : [],
        category: postData.category!,
        author: postData.author || 'IT Carolina Team',
        image_url: postData.image_url || null,
        published: postData.published ?? true,
        date: postData.date || new Date().toISOString().split('T')[0],
        // Include all SEO fields
        custom_title: postData.custom_title || null,
        custom_description: postData.custom_description || null,
        custom_keywords: postData.custom_keywords || null,
        og_title: postData.og_title || null,
        og_description: postData.og_description || null,
        og_image: postData.og_image || null,
        twitter_title: postData.twitter_title || null,
        twitter_description: postData.twitter_description || null,
        twitter_image: postData.twitter_image || null
      };

      // Use RPC function to create blog post
      const { data, error } = await supabase.rpc('admin_create_blog_post', {
        post_data: supabasePostData
      });

      if (error) {
        console.error('[useAdminOperations] RPC error:', error);
        throw error;
      }

      console.log('[useAdminOperations] Create successful:', data);
      return { success: true, data };
    } catch (error) {
      console.error('[useAdminOperations] Create failed:', error);
      throw error;
    } finally {
      setIsLoading(false);
    }
  };

  const deleteBlogPost = async (id: string) => {
    setIsLoading(true);
    try {
      console.log('[useAdminOperations] Starting delete for post:', id);

      // Use direct delete from the blog_posts table
      const { error } = await supabase
        .from('blog_posts')
        .delete()
        .eq('id', id);

      if (error) {
        console.error('[useAdminOperations] Delete error:', error);
        throw error;
      }

      console.log('[useAdminOperations] Delete successful');
      return { success: true };
    } catch (error) {
      console.error('[useAdminOperations] Delete failed:', error);
      throw error;
    } finally {
      setIsLoading(false);
    }
  };

  return {
    updateBlogPost,
    createBlogPost,
    deleteBlogPost,
    isLoading
  };
};
