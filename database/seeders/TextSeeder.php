<?php

namespace Database\Seeders;

use App\Models\Text;
use Illuminate\Database\Seeder;

class TextSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data  =[ 
                    [
                        "key" => "home_about",
                        "type" => "rich_text",
                        "value" => "Dynamic Technology is an Egyptian IT, Business solutions, Professional Services, Technical Training and Technical Support Company. We are working with the objective of enabling organizations perform better towards profitability and growth to survive in a very tough market conditions. Since we started in 2008 we have helped multiple customers to realize their business potential and do business in a standard and profitable way. We are offering all the professional recommendations to help our customers’ organization perform their daily business processes in a professional and standard way also providing the top management with the tools that enable them to make better business decisions. ",
                        "images" => "01.jpg,03.jpg,04.jpg,02.jpg",
                    ],
                    [
                        "key" => "about",
                        "type" => "rich_text",
                        "value" => " Dynamic Technology is an Egyptian IT, Business solutions, Professional Services, Technical Training and Technical Support Company. We are working with the objective of enabling organizations perform better towards profitability and growth to survive in a very tough market conditions. Since we started in 2008 we have helped multiple customers to realize their business potential and do business in a standard and profitable way. We are offering all the professional recommendations to help our customers’ organization perform their daily business processes in a professional and standard way also providing the top management with the tools that enable them to make better business decisions.",
                        // "images" => "01.jpg,03.jpg,04.jpg,02.jpg",
                    ],
                    [
                        "key" => "keywords",
                        "type" => "meta",
                        "value" => "ERP egypt, ERP development egypt, Enterprise Resource Planning, ERP , CRM egypt , CRM development egypt , Customer Relationship Managment System egypt , webdeisgn in egypt , web development in egypt , HR system in egypt",
                    ],
                    [
                        "key" => "description",
                        "type" => "meta",
                        "value" => "Dynamic Technology is an Egyptian IT, Business solutions, Professional Services, Technical Training and Technical Support Company.",
                    ],
                    [
                        "key" => "title",
                        "type" => "meta",
                        "value" => "Dynamic technology | Best ERP system in egypt",
                    ],
                    [
                        "key" => "icon",
                        "type" => "image",
                        "image" => "logo.png",
                    ],
                    [
                        "key" => "twitter_image",
                        "type" => "image",
                        "image" => "sliders/05.png",
                    ],
                    [
                        "key" => "seo",
                        "type" => "rich_text",
                        "image" => "Dynamic Technology Best ERP system in egypt",
                    ],
                    [
                        "key" => "logo",
                        "type" => "image",
                        "image" => "logo.png",
                    ],
                    [
                        "key" => "facts",
                        "type" => "rich_text",
                        "value" => "See What Numbers Speak",
                    ],
                    [
                        "key" => "How we can help you?",
                        "type" => "faq",
                        "value" => "We work with our customers in a synergic way, we meet and discuss, ask questions and get answers until we put our hands on the real challenges that face your business currently and in the future then we propose our solutions that firmly will help your business perform better and place you in a better competitive position against your rivals. ",
                    ],
                    
                    [
                        "key" => "What is ERP software?",
                        "type" => "faq",
                        "value" => "ERP refers to the systems and software packages used by organizations to manage day-to-day business activities, such as accounting, procurement, project management, sales, and manufacturing and distribution operations. In order to fully understand ERP, it helps to take a step back and consider all the processes required to manage a business – which is a lot. These processes include anything from Customer Relationship Management (CRM), order management, inventory management, labor management, HR, accounting and finance, etc. ERP systems tie together and define a plethora of these business processes, and enable the flow of data between them. By collecting an organization’s shared transactional data from multiple sources, ERP systems eliminate data duplication and provide data integrity with a “single source of truth.” Today, ERP systems are critical for managing thousands of businesses of all sizes and in all industries.",
                    ],
                    [
                        "key" => "What are some common ERP features?",
                        "type" => "faq",
                        "value" => "Towards the beginning, when ERP systems first came into the market, these systems were primarily designed for inventory management. Today, however, ERP systems are used to automate back-office tasks and streamline cross-departmental workflows. The modern ERP system has extended well beyond its original functions and now comprises of a full suite of integrated components that provide modern businesses with the tools necessary for streamlining operations. All of these components can become a bit confusing, especially if you’re not well acquainted with the software. This article, here, sheds more light on the common features and key components of any ERP system.",
                    ],
                    [
                        "key" => "Are there free ERP options available?",
                        "type" => "faq",
                        "value" => "As mentioned previously, it all depends on user size, features and the software provider. But to answer this question directly, yes, there are free ERP solutions available today. Some of them you can find from our article, “Top 15 Free and Open Source ERP Solutions.“",
                    ],
                    [
                        "key" => "What are the benefits of using ERP?",
                        "type" => "faq",
                        "value" => "One immediate impact of implementing an ERP solution is the systematic and uniform flow of business data and information across all departments in an organization. Being provided this real-time information allows you to make better business decisions and ensures you that all the information and data is completely up to date and precise. Many business organizations get a step ahead in real-time analysis with complete access to standardized and reliable data. Here are more benefits of using ERP software.Looking for more? Download our ERP buyers guide for free and compare the top-24 products available on the market with full page vendor profiles, including key capabilities, an overview of the ERP software market, questions to ask before purchasing, and our bottom-line analysis. It’s the perfect resource for anyone looking to find right ERP for their business.And don’t forget to follow us on Twitter, Facebook and LinkedIn for all the latest in the ERP space",
                    ],
                    [
                        "key" => "our_proucts",
                        "type" => "rich_text",
                        "value" => "Check What Products<br> We Offer",
                    ],
                    [
                        "key" => "why_choose_us",
                        "type" => "rich_text",
                        "value" => "Why Choose Us",
                    ],
                    [
                        "key" => "our_blog",
                        "type" => "rich_text",
                        "value" => "Check out Our <br> Latest News & Articles",
                    ],
                    [
                        "key" => "footer_about",
                        "type" => "rich_text",
                        "value" => "Dynamic Business Solutions the leading systems integrator was established in 2006 with a vision to lead the information technology market depending on its dynamic portfolio and Vertical Solutions. ",
                    ],
                    [
                        "key" => "address",
                        "type" => "contacts",
                        "value" => "Abd El-Hameed Awad, Nasr City",
                    ],
                    [
                        "key" => "phone",
                        "type" => "contacts",
                        "value" => "+20026706524",
                    ],
                    [
                        "key" => "email",
                        "type" => "contacts",
                        "value" => " info@dynamiceg.com",
                    ],
                    [
                        "key" => "facebook-f",
                        "type" => "social_media",
                        "value" => "https://www.facebook.com/dynamiceg/",
                    ],
                    [
                        "key" => "linkedin",
                        "type" => "social_media",
                        "value" => "https://www.linkedin.com/company/dynamic-technology/",
                    ],
                    [
                        "key" => "opening_time",
                        "type" => "rich_text",
                        "value" => "mon-fri: 08.00 - 17.00",
                    ],
                    [
                        "key" => "about_section_title",
                        "type" => "rich_text",
                        "value" => "Welcome to the World of Dynamic Technology",
                    ],
                    [
                        "key" => "vision",
                        "type" => "about",
                        "value" => "To make business solutions within any company the most important and valuable asset by understanding business organization’s requirements and adapting technology for the fulfillment of these requirements. ",
                    ],
                    [
                        "key" => "about_section",
                        "type" => "rich_text",
                        "value" => "Set Your Goals High, and Don't Stop Till You Get There",
                    ],
                    
                    [
                        "key" => "mission",
                        "type" => "about",
                        "value" => "is to provide businesses with ERP solutions along with all related professional services. Also provide individuals and corporates with the professional training on the same. ",
                    ],
                    [
                        "key" => "about_video",
                        "type" => "video",
                        "value" => "https://www.youtube.com/watch?v=NWxMqiFq0Yo",
                    ],
                    [
                        "key" => "why_choose_us_video",
                        "type" => "video",
                        "value" => "https://www.youtube.com/watch?v=NWxMqiFq0Yo",
                    ],
                    [
                        "key" => "why_choose_us_image",
                        "type" => "image",
                        "image" => "http://techydevs.com/demos/themes/html/demo/prizon/images/video-img2.jpg",
                    ],
                    [
                        "key" => "faq",
                        "type" => "rich_text",
                        "value" => "Frequently Asked Questions",
                    ],
                    [
                        "key" => "faq_image",
                        "type" => "image",
                        "value" => "http://techydevs.com/demos/themes/html/demo/prizon/images/workspace.svg",
                    ],
                    [
                        "key" => "get_in_touch",
                        "type" => "rich_text",
                        "value" => "Do you have any inquiries?",
                    ],
                    [
                        "key" => "get_in_touch_qoute",
                        "type" => "rich_text",
                        "value" => "Contact us without any hesitate.",
                    ],
                    [
                        "key" => "our_team",
                        "type" => "rich_text",
                        "value" => "Meet Our Team",
                    ],
                    [
                        "key" => "contact_get_in_touch",
                        "type" => "rich_text",
                        "value" => "Need Any Help? Contact us",
                    ],
                    [
                        "key" => "contact_image",
                        "type" => "image",
                        "value" => "http://techydevs.com/demos/themes/html/demo/prizon/images/contact-img.png",
                    ],
                    [
                        "key" => "location",
                        "type" => "map",
                        "value" => "https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3453.361177913617!2d31.34507631511543!3d30.055179981878403!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0!2zMzDCsDAzJzE4LjciTiAzMcKwMjAnNTAuMiJF!5e0!3m2!1sen!2seg!4v1605778163274!5m2!1sen!2seg",
                    ],
                    [
                        "key" => "High Quality",
                        "type" => "why_choose_us",
                        "value" => "We have a quality management system for our service. This department will ensure the quality of our support staff's reply. Our support engineers act very fast and effectively in the much needed situations.",
                        'icon' => 'certificate',
                    ],
                    [
                        "key" => "Experience Team Member",
                        "type" => "why_choose_us",
                        "value" => "We have highly skilled engineers with excellent technical knowledge and experience in using latest software standards, tools, platforms, frameworks and technologies",
                        'icon' => 'users',
                    ],
                    [
                        "key" => "12 Years of Experience",
                        "type" => "why_choose_us",
                        "value" => "In more than 12 years of IT outsourcing, we have gained experience in a wide spectrum of technologies, industries, and application types.",
                        'icon' => 'bullseye',
                    ],
                    [
                        "key" => "Round 'O Clock Support",
                        "type" => "why_choose_us",
                        "value" => "Our techs will work 24x7x365. Your Helpdesk is observed round-the-clock. We have backup techs for your server management.Our flexible and scalable staffing solutions also ensure reliable support.",
                        'icon' => 'microphone',
                    ],
                    



                ];

       foreach($data as $record){
           Text::create($record);
       }
    }
}
