export interface BlogPost {
  slug: string;
  title: string;
  excerpt: string;
  content: any[];
  category: string;
  author: string;
  date: string;
  image_url: string;
  custom_title?: string;
  custom_description?: string;
  custom_keywords?: string;
  og_title?: string;
  og_description?: string;
  og_image?: string;
  twitter_title?: string;
  twitter_description?: string;
  twitter_image?: string;
  created_at: string;
  updated_at: string;
}

export function escapeHtml(text: string): string {
  const map: { [key: string]: string } = {
    '&': '&amp;',
    '<': '&lt;',
    '>': '&gt;',
    '"': '&quot;',
    "'": '&#039;'
  };
  return text.replace(/[&<>"']/g, (m) => map[m]);
}

export function calculateReadingTime(content: any[]): number {
  const wordCount = content.reduce((count, section) => {
    if (section.content) {
      return count + section.content.split(/\s+/).length;
    } else if (section.items) {
      return count + section.items.join(' ').split(/\s+/).length;
    }
    return count;
  }, 0);
  return Math.max(1, Math.ceil(wordCount / 200));
}