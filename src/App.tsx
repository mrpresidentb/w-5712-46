
import { Toaster } from "@/components/ui/toaster";
import { Toaster as Sonner } from "@/components/ui/sonner";
import { TooltipProvider } from "@/components/ui/tooltip";
import { QueryClient, QueryClientProvider } from "@tanstack/react-query";
import { BrowserRouter, Routes, Route } from "react-router-dom";
import { useState, lazy, Suspense } from "react";
import LoadingAnimation from "./components/LoadingAnimation";

// Lazy load non-critical pages
const Index = lazy(() => import("./pages/Index"));
const NotFound = lazy(() => import("./pages/NotFound"));
const About = lazy(() => import("./pages/About"));
const PrivacyPolicy = lazy(() => import("./pages/PrivacyPolicy"));
const BlogPostDetail = lazy(() => import("./pages/BlogPostDetail"));
const BlogListing = lazy(() => import("./pages/BlogListing"));
const HomeOfficeSupport = lazy(() => import("./pages/HomeOfficeSupport"));
const BusinessSupport = lazy(() => import("./pages/BusinessSupport"));
const PrinterSupport = lazy(() => import("./pages/PrinterSupport"));
const WebHosting = lazy(() => import("./pages/WebHosting"));
const Pricing = lazy(() => import("./pages/Pricing"));
const TermsOfService = lazy(() => import("./pages/TermsOfService"));
const FAQ = lazy(() => import("./pages/FAQ"));
const Services = lazy(() => import("./pages/Services"));
const BlogAdmin = lazy(() => import("./pages/admin/BlogAdmin"));

const App = () => {
  const [queryClient] = useState(() => new QueryClient({
    defaultOptions: {
      queries: {
        retry: 1,
        refetchOnWindowFocus: false,
      },
    },
  }));

  return (
    <QueryClientProvider client={queryClient}>
      <TooltipProvider delayDuration={0}>
        <Toaster />
        <Sonner />
        <BrowserRouter>
          <Suspense fallback={<LoadingAnimation />}>
            <Routes>
              <Route path="/" element={<Index />} />
              <Route path="/about" element={<About />} />
              <Route path="/privacy-policy" element={<PrivacyPolicy />} />
              <Route path="/terms" element={<TermsOfService />} />
              <Route path="/faq" element={<FAQ />} />
              <Route path="/services" element={<Services />} />
              <Route path="/blog" element={<BlogListing />} />
              <Route path="/blog/:slug" element={<BlogPostDetail />} />
              <Route path="/services/home-office" element={<HomeOfficeSupport />} />
              <Route path="/services/business" element={<BusinessSupport />} />
              <Route path="/services/printer" element={<PrinterSupport />} />
              <Route path="/services/web-hosting" element={<WebHosting />} />
              <Route path="/pricing" element={<Pricing />} />
              <Route path="/admin/blog" element={<BlogAdmin />} />
              <Route path="*" element={<NotFound />} />
            </Routes>
          </Suspense>
        </BrowserRouter>
      </TooltipProvider>
    </QueryClientProvider>
  );
};

export default App;
