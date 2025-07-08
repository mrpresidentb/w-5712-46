import React from 'react';
import { Monitor, Shield, Wifi, Printer, Globe, Users, Home, Building, ArrowRight, Phone, Mail } from "lucide-react";
import { Link } from 'react-router-dom';
import PageLayout from '@/components/PageLayout';
import SEO from '@/components/SEO';
import { Button } from "@/components/ui/button";
import { Card, CardContent, CardDescription, CardHeader, CardTitle } from "@/components/ui/card";

const Services = () => {
  const services = [
    {
      icon: <Monitor className="w-8 h-8 text-blue-600" />,
      title: "Computer Repair & Diagnostics",
      description: "Professional computer repair services for slow computers, virus removal, hardware diagnostics, and performance optimization for Windows and Mac systems.",
      features: ["Virus & Malware Removal", "Hardware Diagnostics", "Performance Optimization", "Data Recovery"],
      link: "/services/home-office",
      keywords: "computer repair charlotte nc, virus removal, pc repair"
    },
    {
      icon: <Building className="w-8 h-8 text-blue-600" />,
      title: "Small Business IT Support",
      description: "Comprehensive IT support solutions for small businesses including network setup, server management, and ongoing technical support.",
      features: ["Network Infrastructure", "Server Management", "Email Setup", "Remote Support"],
      link: "/services/business",
      keywords: "business IT support charlotte, small business technology"
    },
    {
      icon: <Home className="w-8 h-8 text-blue-600" />,
      title: "Home Office Setup",
      description: "Complete home office IT setup including computer configuration, network connectivity, and productivity software installation.",
      features: ["Home Network Setup", "Computer Configuration", "Software Installation", "Productivity Tools"],
      link: "/services/home-office",
      keywords: "home office setup charlotte, work from home IT support"
    },
    {
      icon: <Printer className="w-8 h-8 text-blue-600" />,
      title: "Printer Support & Setup",
      description: "Expert printer installation, troubleshooting, and maintenance services for all major printer brands and models.",
      features: ["Printer Installation", "Wireless Setup", "Driver Updates", "Troubleshooting"],
      link: "/services/printer",
      keywords: "printer setup charlotte, printer repair, wireless printer installation"
    },
    {
      icon: <Globe className="w-8 h-8 text-blue-600" />,
      title: "Web Design & Hosting",
      description: "Professional website design, domain registration, SSL certificates, and reliable web hosting services for small businesses.",
      features: ["Website Design", "Domain Registration", "SSL Certificates", "Web Hosting"],
      link: "/services/web-hosting",
      keywords: "web design charlotte nc, website hosting, small business websites"
    },
    {
      icon: <Wifi className="w-8 h-8 text-blue-600" />,
      title: "Network & Wi-Fi Solutions",
      description: "Professional network installation, Wi-Fi optimization, security configuration, and connectivity troubleshooting services.",
      features: ["Wi-Fi Installation", "Network Security", "Range Optimization", "Troubleshooting"],
      link: "/services/business",
      keywords: "wifi setup charlotte, network installation, wireless troubleshooting"
    }
  ];

  const additionalServices = [
    "Data Backup & Recovery Solutions",
    "Microsoft 365 & Google Workspace Setup",
    "Cybersecurity Assessments",
    "Hardware Upgrades & Installation",
    "Software Training & Support",
    "Remote Technical Support",
    "Ongoing Maintenance Plans",
    "Technology Consultations"
  ];

  const breadcrumbItems = [
    { label: 'Home', href: '/' },
    { label: 'Services' }
  ];

  return (
    <PageLayout breadcrumbItems={breadcrumbItems}>
      <SEO
        title="IT Services Charlotte NC | Computer Repair & Business Support | IT Carolina"
        description="Complete IT services in Charlotte NC including computer repair, business IT support, home office setup, printer support, web design, and network solutions. Professional technicians serving Charlotte metro area."
        keywords="IT services charlotte nc, computer repair charlotte, business IT support, home office setup, printer repair charlotte, web design charlotte, network setup, wifi installation charlotte, technology support services, small business IT charlotte"
        canonical="https://itcarolina.us/services"
      />

      <div className="min-h-screen bg-white">
        {/* Hero Section */}
        <section className="py-16 bg-gradient-to-br from-blue-50 to-white">
          <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div className="text-center">
              <h1 className="text-4xl md:text-5xl font-bold text-gray-900 mb-6">
                Complete IT Services in Charlotte, NC
              </h1>
              <p className="text-xl text-gray-600 max-w-3xl mx-auto mb-8">
                From computer repair to business IT support, we provide comprehensive technology solutions 
                for homes and businesses in the Charlotte metro area. Professional, reliable, and affordable IT services.
              </p>
              <div className="flex flex-col sm:flex-row gap-4 justify-center">
                <Button 
                  asChild
                  size="lg"
                  className="bg-blue-600 hover:bg-blue-700"
                >
                  <Link to="/pricing">View Pricing</Link>
                </Button>
                <Button 
                  variant="outline" 
                  size="lg"
                  onClick={() => {
                    const contactSection = document.getElementById('contact');
                    if (contactSection) {
                      contactSection.scrollIntoView({ behavior: 'smooth' });
                    }
                  }}
                >
                  Get Free Quote
                </Button>
              </div>
            </div>
          </div>
        </section>

        {/* Main Services Grid */}
        <section className="py-16">
          <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div className="text-center mb-12">
              <h2 className="text-3xl font-bold text-gray-900 mb-4">
                Our IT Services & Solutions
              </h2>
              <p className="text-lg text-gray-600 max-w-2xl mx-auto">
                Professional technology services designed to keep your computers running smoothly 
                and your business operations efficient.
              </p>
            </div>

            <div className="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
              {services.map((service, index) => (
                <Card key={index} className="hover:shadow-lg transition-shadow duration-300 border border-gray-200">
                  <CardHeader>
                    <div className="flex items-center mb-4">
                      <div className="p-3 bg-blue-50 rounded-lg mr-4">
                        {service.icon}
                      </div>
                      <CardTitle className="text-xl">{service.title}</CardTitle>
                    </div>
                    <CardDescription className="text-gray-600">
                      {service.description}
                    </CardDescription>
                  </CardHeader>
                  <CardContent>
                    <ul className="space-y-2 mb-6">
                      {service.features.map((feature, featureIndex) => (
                        <li key={featureIndex} className="flex items-center text-sm text-gray-600">
                          <div className="w-2 h-2 bg-blue-600 rounded-full mr-3"></div>
                          {feature}
                        </li>
                      ))}
                    </ul>
                    <Button asChild variant="outline" className="w-full">
                      <Link to={service.link}>
                        Learn More
                        <ArrowRight className="ml-2 w-4 h-4" />
                      </Link>
                    </Button>
                  </CardContent>
                </Card>
              ))}
            </div>
          </div>
        </section>

        {/* Additional Services */}
        <section className="py-16 bg-gray-50">
          <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div className="text-center mb-12">
              <h2 className="text-3xl font-bold text-gray-900 mb-4">
                Additional IT Services
              </h2>
              <p className="text-lg text-gray-600">
                We also provide these specialized technology services to meet all your IT needs.
              </p>
            </div>

            <div className="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
              {additionalServices.map((service, index) => (
                <div key={index} className="bg-white p-6 rounded-lg shadow-sm border border-gray-200">
                  <div className="flex items-center">
                    <Shield className="w-5 h-5 text-blue-600 mr-3" />
                    <span className="text-sm font-medium text-gray-900">{service}</span>
                  </div>
                </div>
              ))}
            </div>
          </div>
        </section>

        {/* Service Areas */}
        <section className="py-16">
          <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div className="text-center mb-12">
              <h2 className="text-3xl font-bold text-gray-900 mb-4">
                Serving Charlotte Metro Area
              </h2>
              <p className="text-lg text-gray-600 mb-8">
                Professional IT services for residential and commercial clients throughout Charlotte, NC and surrounding areas.
              </p>
            </div>

            <div className="grid grid-cols-1 lg:grid-cols-2 gap-12">
              <div>
                <h3 className="text-2xl font-semibold text-gray-900 mb-6">For Home Users</h3>
                <ul className="space-y-3">
                  <li className="flex items-center">
                    <Home className="w-5 h-5 text-blue-600 mr-3" />
                    <span>Computer repair and virus removal</span>
                  </li>
                  <li className="flex items-center">
                    <Wifi className="w-5 h-5 text-blue-600 mr-3" />
                    <span>Home network and Wi-Fi setup</span>
                  </li>
                  <li className="flex items-center">
                    <Printer className="w-5 h-5 text-blue-600 mr-3" />
                    <span>Printer installation and troubleshooting</span>
                  </li>
                  <li className="flex items-center">
                    <Shield className="w-5 h-5 text-blue-600 mr-3" />
                    <span>Data backup and security solutions</span>
                  </li>
                </ul>
              </div>

              <div>
                <h3 className="text-2xl font-semibold text-gray-900 mb-6">For Businesses</h3>
                <ul className="space-y-3">
                  <li className="flex items-center">
                    <Building className="w-5 h-5 text-blue-600 mr-3" />
                    <span>Small business IT support and consulting</span>
                  </li>
                  <li className="flex items-center">
                    <Users className="w-5 h-5 text-blue-600 mr-3" />
                    <span>Employee computer setup and training</span>
                  </li>
                  <li className="flex items-center">
                    <Globe className="w-5 h-5 text-blue-600 mr-3" />
                    <span>Website design and hosting services</span>
                  </li>
                  <li className="flex items-center">
                    <Mail className="w-5 h-5 text-blue-600 mr-3" />
                    <span>Business email and communication setup</span>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </section>

        {/* CTA Section */}
        <section className="py-16 bg-blue-600 text-white">
          <div className="max-w-4xl mx-auto text-center px-4 sm:px-6 lg:px-8">
            <h2 className="text-3xl font-bold mb-4">
              Ready to Get Started?
            </h2>
            <p className="text-xl mb-8">
              Contact us today for a free consultation and quote for your IT service needs in Charlotte, NC.
            </p>
            <div className="flex flex-col sm:flex-row gap-4 justify-center">
              <Button 
                size="lg"
                variant="secondary"
                onClick={() => {
                  const contactSection = document.getElementById('contact');
                  if (contactSection) {
                    contactSection.scrollIntoView({ behavior: 'smooth' });
                  }
                }}
              >
                <Phone className="mr-2 w-5 h-5" />
                Call (704) 520-0809
              </Button>
              <Button 
                size="lg"
                variant="outline"
                className="bg-transparent border-white text-white hover:bg-white hover:text-blue-600"
                onClick={() => {
                  const contactSection = document.getElementById('contact');
                  if (contactSection) {
                    contactSection.scrollIntoView({ behavior: 'smooth' });
                  }
                }}
              >
                <Mail className="mr-2 w-5 h-5" />
                Get Free Quote
              </Button>
            </div>
          </div>
        </section>
      </div>
    </PageLayout>
  );
};

export default Services;