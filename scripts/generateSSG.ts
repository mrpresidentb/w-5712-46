import fs from 'fs';
import path from 'path';
import { createClient } from '@supabase/supabase-js';

// Use the actual Supabase configuration from the project
const supabaseUrl = "https://vmmhvciyxfbwytuvztug.supabase.co";
const supabaseKey = "eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJpc3MiOiJzdXBhYmFzZSIsInJlZiI6InZtbWh2Y2l5eGZid3l0dXZ6dHVnIiwicm9sZSI6ImFub24iLCJpYXQiOjE3NTEzMzg2NzAsImV4cCI6MjA2NjkxNDY3MH0._pu1smjtNkE7i_-mSX6NCkwSa_dwAWsNsqkoBsI6R74";

const supabase = createClient(supabaseUrl, supabaseKey);

interface BlogPost {
  id: string;
  slug: string;
  title: string;
  excerpt: string | null;
  content: any;
  date: string;
  author: string;
  category: string;
  image_url: string | null;
  published: boolean;
  created_at: string;
  updated_at: string;
  custom_title?: string | null;
  custom_description?: string | null;
  custom_keywords?: string | null;
  og_title?: string | null;
  og_description?: string | null;
  og_image?: string | null;
  twitter_title?: string | null;
  twitter_description?: string | null;
  twitter_image?: string | null;
}

async function fetchBlogPosts(): Promise<BlogPost[]> {
  console.log('Fetching blog posts from Supabase...');
  
  const { data, error } = await supabase
    .from('blog_posts')
    .select('*')
    .eq('published', true)
    .order('date', { ascending: false });

  if (error) {
    console.error('Error fetching blog posts:', error);
    throw error;
  }

  console.log(`Found ${data?.length || 0} published blog posts`);
  return data || [];
}

function generateStaticHTML(post: BlogPost): string {
  const baseUrl = 'https://itcarolina.us';
  const postUrl = `${baseUrl}/blog/${post.slug}`;
  
  // Use custom meta data or generate defaults
  const title = post.og_title || post.custom_title || `${post.title} | IT Carolina - Charlotte NC Computer Repair`;
  const description = post.og_description || post.custom_description || post.excerpt || 'Professional IT support for home and small business in Charlotte, NC';
  const image = post.og_image || (post.image_url ? (post.image_url.startsWith('http') ? post.image_url : `${baseUrl}${post.image_url}`) : `${baseUrl}/og.jpg`);
  const keywords = post.custom_keywords || 'computer repair charlotte nc, IT support charlotte nc, computer help charlotte';

  return `<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  <!-- Primary Meta Tags -->
  <title>${title}</title>
  <meta name="title" content="${title}">
  <meta name="description" content="${description}">
  <meta name="keywords" content="${keywords}">
  <link rel="canonical" href="${postUrl}">
  
  <!-- Open Graph / Facebook -->
  <meta property="og:type" content="article">
  <meta property="og:url" content="${postUrl}">
  <meta property="og:title" content="${title}">
  <meta property="og:description" content="${description}">
  <meta property="og:image" content="${image}">
  <meta property="og:site_name" content="IT Carolina">
  <meta property="article:published_time" content="${new Date(post.created_at).toISOString()}">
  <meta property="article:modified_time" content="${new Date(post.updated_at).toISOString()}">
  <meta property="article:author" content="${post.author}">
  <meta property="article:section" content="${post.category}">

  <!-- Twitter -->
  <meta property="twitter:card" content="summary_large_image">
  <meta property="twitter:url" content="${postUrl}">
  <meta property="twitter:title" content="${post.twitter_title || title}">
  <meta property="twitter:description" content="${post.twitter_description || description}">
  <meta property="twitter:image" content="${post.twitter_image || image}">

  <!-- Additional Meta Tags -->
  <meta name="robots" content="index, follow">
  <meta name="author" content="${post.author}">
  <meta name="date" content="${post.date}">
  
  <!-- Favicon and Icons -->
  <link rel="icon" type="image/x-icon" href="/favicon.ico">
  <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
  
  <!-- JSON-LD Structured Data -->
  <script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@type": "Article",
    "headline": "${post.title}",
    "description": "${description}",
    "image": "${image}",
    "author": {
      "@type": "Organization",
      "name": "${post.author}",
      "url": "${baseUrl}"
    },
    "publisher": {
      "@type": "Organization",
      "name": "IT Carolina",
      "logo": {
        "@type": "ImageObject",
        "url": "${baseUrl}/og.jpg"
      }
    },
    "datePublished": "${new Date(post.created_at).toISOString()}",
    "dateModified": "${new Date(post.updated_at).toISOString()}",
    "mainEntityOfPage": {
      "@type": "WebPage",
      "@id": "${postUrl}"
    },
    "articleSection": "${post.category}",
    "keywords": "${keywords}"
  }
  </script>

  <!-- Redirect to SPA for functionality -->
  <script>
    // Redirect to the SPA after meta tags are loaded (with hash routing)
    setTimeout(function() {
      window.location.href = '/#/blog/${post.slug}';
    }, 100);
  </script>
</head>
<body>
  <!-- Fallback content for crawlers -->
  <div style="max-width: 800px; margin: 0 auto; padding: 20px; font-family: Arial, sans-serif;">
    <header>
      <h1>${post.title}</h1>
      <p style="color: #666;">
        By ${post.author} | ${post.date} | ${post.category}
      </p>
    </header>
    <main>
      <p>${description}</p>
      <p><a href="/">← Back to IT Carolina</a></p>
    </main>
  </div>
</body>
</html>`;
}

async function generateSSG() {
  try {
    console.log('Starting Static Site Generation for blog posts...');
    
    // Check if dist directory exists
    const distDir = path.join(process.cwd(), 'dist');
    if (!fs.existsSync(distDir)) {
      console.error('Error: dist directory not found. Please run "npm run build" first.');
      process.exit(1);
    }

    // Fetch all published blog posts
    const posts = await fetchBlogPosts();
    
    if (posts.length === 0) {
      console.log('No published blog posts found. Skipping SSG generation.');
      return;
    }

    // Create blog directory in dist
    const blogDir = path.join(distDir, 'blog');
    if (!fs.existsSync(blogDir)) {
      fs.mkdirSync(blogDir, { recursive: true });
    }

    // Generate static HTML for each post
    for (const post of posts) {
      const postDir = path.join(blogDir, post.slug);
      const htmlFile = path.join(postDir, 'index.html');
      
      // Create post directory
      if (!fs.existsSync(postDir)) {
        fs.mkdirSync(postDir, { recursive: true });
      }
      
      // Generate and write HTML
      const html = generateStaticHTML(post);
      fs.writeFileSync(htmlFile, html, 'utf8');
      
      console.log(`✓ Generated static HTML for: ${post.slug}`);
    }

    console.log(`\nSSG generation complete! Generated ${posts.length} static blog pages.`);
    console.log('Static files are available in: dist/blog/[slug]/index.html');
    
  } catch (error) {
    console.error('Error during SSG generation:', error);
    process.exit(1);
  }
}

// Run the SSG generation
if (import.meta.url === `file://${process.argv[1]}`) {
  generateSSG();
}

export { generateSSG };