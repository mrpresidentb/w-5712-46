
import React, { useState } from 'react';
import { Button } from '@/components/ui/button';
import { Card, CardContent, CardHeader, CardTitle } from '@/components/ui/card';
import { useSupabaseBlog } from '@/hooks/useSupabaseBlog';
import { useAdminOperations } from '@/hooks/useAdminOperations';
import BlogPostsTable from '@/components/admin/BlogPostsTable';
import ArticleEditor from '@/components/admin/ArticleEditor';
import AdminLogin from '@/components/admin/AdminLogin';
import AdminHeader from '@/components/admin/AdminHeader';
import { useAdminAuth } from '@/hooks/useAdminAuth';
import { BlogPost } from '@/types/supabase-blog';
import { Plus, FileText, Image } from 'lucide-react';
import { toast } from 'sonner';

const BlogAdmin = () => {
  const { isAuthenticated, isLoading } = useAdminAuth();
  const { blogPosts, loading, error, refetch } = useSupabaseBlog(true); // Include unpublished posts for admin
  const { updateBlogPost, createBlogPost, isLoading: isSaving } = useAdminOperations();
  const [currentView, setCurrentView] = useState<'list' | 'create' | 'edit'>('list');
  const [editingArticle, setEditingArticle] = useState<BlogPost | null>(null);

  // Show loading screen while checking authentication
  if (isLoading) {
    return (
      <div className="container mx-auto px-4 py-8">
        <div className="flex items-center justify-center min-h-[400px]">
          <div className="text-center">
            <div className="animate-spin rounded-full h-8 w-8 border-b-2 border-purple-600 mx-auto mb-4"></div>
            <p>Loading...</p>
          </div>
        </div>
      </div>
    );
  }

  // Show login form if not authenticated
  if (!isAuthenticated) {
    return <AdminLogin />;
  }

  const handleCreateNew = () => {
    setEditingArticle(null);
    setCurrentView('create');
  };

  const handleEditArticle = (article: BlogPost) => {
    setEditingArticle(article);
    setCurrentView('edit');
  };

  const handleSaveArticle = async (articleData: Partial<BlogPost>) => {
    try {
      if (editingArticle) {
        // Update existing article
        await updateBlogPost(editingArticle.id, articleData);
        toast.success('Article updated successfully!');
      } else {
        // Create new article
        await createBlogPost(articleData);
        toast.success('Article created successfully!');
      }

      await refetch();
      setCurrentView('list');
      setEditingArticle(null);
    } catch (error) {
      console.error('Error saving article:', error);
      toast.error('Failed to save article. Please check your permissions.');
      throw error;
    }
  };

  const handleCancel = () => {
    setCurrentView('list');
    setEditingArticle(null);
  };

  if (loading) {
    return (
      <div className="container mx-auto px-4 py-8">
        <AdminHeader />
        <div className="flex items-center justify-center min-h-[400px]">
          <div className="text-center">
            <div className="animate-spin rounded-full h-8 w-8 border-b-2 border-purple-600 mx-auto mb-4"></div>
            <p>Loading blog administration...</p>
          </div>
        </div>
      </div>
    );
  }

  if (error) {
    return (
      <div className="container mx-auto px-4 py-8">
        <AdminHeader />
        <Card className="max-w-md mx-auto">
          <CardHeader>
            <CardTitle className="text-red-600">Error</CardTitle>
          </CardHeader>
          <CardContent>
            <p className="text-red-600 mb-4">{error}</p>
            <Button onClick={refetch}>Try Again</Button>
          </CardContent>
        </Card>
      </div>
    );
  }

  return (
    <div className="container mx-auto px-4 py-8">
      <AdminHeader />
      
      <div className="mb-8">
        <h1 className="text-3xl font-bold mb-2">Blog Administration</h1>
        <p className="text-gray-600">Manage your blog posts, images, and content</p>
      </div>

      {currentView === 'list' && (
        <div className="space-y-6">
          {/* Quick Actions */}
          <Card>
            <CardHeader>
              <CardTitle className="flex items-center justify-between">
                <span>Quick Actions</span>
                <Button onClick={handleCreateNew} className="flex items-center gap-2">
                  <Plus className="w-4 h-4" />
                  Create New Article
                </Button>
              </CardTitle>
            </CardHeader>
            <CardContent>
              <div className="grid grid-cols-1 md:grid-cols-4 gap-4">
                <div className="flex items-center gap-3 p-4 bg-blue-50 rounded-lg">
                  <FileText className="w-8 h-8 text-blue-600" />
                  <div>
                    <div className="font-semibold text-blue-900">{blogPosts.length}</div>
                    <div className="text-sm text-blue-700">Total Articles</div>
                  </div>
                </div>
                <div className="flex items-center gap-3 p-4 bg-green-50 rounded-lg">
                  <FileText className="w-8 h-8 text-green-600" />
                  <div>
                    <div className="font-semibold text-green-900">
                      {blogPosts.filter(post => post.published).length}
                    </div>
                    <div className="text-sm text-green-700">Published</div>
                  </div>
                </div>
                <div className="flex items-center gap-3 p-4 bg-yellow-50 rounded-lg">
                  <FileText className="w-8 h-8 text-yellow-600" />
                  <div>
                    <div className="font-semibold text-yellow-900">
                      {blogPosts.filter(post => !post.published).length}
                    </div>
                    <div className="text-sm text-yellow-700">Drafts</div>
                  </div>
                </div>
                <div className="flex items-center gap-3 p-4 bg-purple-50 rounded-lg">
                  <Image className="w-8 h-8 text-purple-600" />
                  <div>
                    <div className="font-semibold text-purple-900">
                      {blogPosts.filter(post => post.image_url).length}
                    </div>
                    <div className="text-sm text-purple-700">With Images</div>
                  </div>
                </div>
              </div>
            </CardContent>
          </Card>

          {/* Enhanced Articles Table */}
          <BlogPostsTable 
            blogPosts={blogPosts} 
            onRefresh={refetch}
            onEdit={handleEditArticle}
          />
        </div>
      )}

      {(currentView === 'create' || currentView === 'edit') && (
        <ArticleEditor
          article={editingArticle}
          onSave={handleSaveArticle}
          onCancel={handleCancel}
          isLoading={isSaving}
        />
      )}
    </div>
  );
};

export default BlogAdmin;
