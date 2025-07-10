-- Create admin functions for blog management that include SEO fields

-- Function to create blog posts with all fields including SEO
CREATE OR REPLACE FUNCTION public.admin_create_blog_post(post_data jsonb)
RETURNS text
LANGUAGE plpgsql
SECURITY DEFINER
AS $$
DECLARE
    new_id text;
BEGIN
    INSERT INTO public.blog_posts (
        title,
        slug,
        excerpt,
        content,
        category,
        author,
        image_url,
        published,
        date,
        custom_title,
        custom_description,
        custom_keywords,
        og_title,
        og_description,
        og_image,
        twitter_title,
        twitter_description,
        twitter_image
    ) VALUES (
        (post_data->>'title')::text,
        (post_data->>'slug')::text,
        (post_data->>'excerpt')::text,
        COALESCE((post_data->'content')::jsonb, '[]'::jsonb),
        (post_data->>'category')::text,
        COALESCE((post_data->>'author')::text, 'IT Carolina Team'),
        (post_data->>'image_url')::text,
        COALESCE((post_data->>'published')::boolean, true),
        COALESCE((post_data->>'date')::date, CURRENT_DATE),
        (post_data->>'custom_title')::text,
        (post_data->>'custom_description')::text,
        (post_data->>'custom_keywords')::text,
        (post_data->>'og_title')::text,
        (post_data->>'og_description')::text,
        (post_data->>'og_image')::text,
        (post_data->>'twitter_title')::text,
        (post_data->>'twitter_description')::text,
        (post_data->>'twitter_image')::text
    ) RETURNING id INTO new_id;
    
    RETURN new_id;
END;
$$;

-- Function to update blog posts with all fields including SEO
CREATE OR REPLACE FUNCTION public.admin_update_blog_post(post_id text, updates jsonb)
RETURNS void
LANGUAGE plpgsql
SECURITY DEFINER
AS $$
BEGIN
    UPDATE public.blog_posts 
    SET 
        title = COALESCE((updates->>'title')::text, title),
        slug = COALESCE((updates->>'slug')::text, slug),
        excerpt = COALESCE((updates->>'excerpt')::text, excerpt),
        content = COALESCE((updates->'content')::jsonb, content),
        category = COALESCE((updates->>'category')::text, category),
        author = COALESCE((updates->>'author')::text, author),
        image_url = COALESCE((updates->>'image_url')::text, image_url),
        published = COALESCE((updates->>'published')::boolean, published),
        date = COALESCE((updates->>'date')::date, date),
        custom_title = COALESCE((updates->>'custom_title')::text, custom_title),
        custom_description = COALESCE((updates->>'custom_description')::text, custom_description),
        custom_keywords = COALESCE((updates->>'custom_keywords')::text, custom_keywords),
        og_title = COALESCE((updates->>'og_title')::text, og_title),
        og_description = COALESCE((updates->>'og_description')::text, og_description),
        og_image = COALESCE((updates->>'og_image')::text, og_image),
        twitter_title = COALESCE((updates->>'twitter_title')::text, twitter_title),
        twitter_description = COALESCE((updates->>'twitter_description')::text, twitter_description),
        twitter_image = COALESCE((updates->>'twitter_image')::text, twitter_image),
        updated_at = now()
    WHERE id = post_id::uuid;
END;
$$;