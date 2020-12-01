<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $products = [
            [
                "title" => "NEXT ERP: Enterprise Resource Planning – ERP",
                "slug" => "NEXT-ERP-Enterprise-Resource-Planning-ERP",
                "icon" => "network-wired",
                "image" => "https://media.istockphoto.com/vectors/enterprise-resource-planning-concept-skyscraper-building-pencil-shape-vector-id1283808998?b=1&k=6&m=1283808998&s=612x612&w=0&h=4WQX6841jSDAdLXXVZDVIw6GvplNBJy3JGXYSW0xxx8=",
                "breif" => "Dynamic BPR (Business Process Reengineering) will lead to more flexible and organized management policies using our consulting and strategic thinking mindset, also we take into consideration the needs of top management for accurate and timely information to support their decision making process.",
                "seo" => "the ebst erp system in egypt",
            ],
            [
                "title"  =>  "NEXT HRMS: Human Resources Management ",
                "slug" => "NEXT-HRMS-Human-Resources-Management",
                "content" => '
                    <li class="product-li"><span class="icon la la-check"></span>Personnel Management </li>
                    <li class="product-li"><span class="icon la la-check"></span>Recruitment Planning and Management </li>
                    <li class="product-li"><span class="icon la la-check"></span>Training Management </li>
                    <li class="product-li"><span class="icon la la-check"></span>Employee Benefits </li>
                    <li class="product-li"><span class="icon la la-check"></span>Payroll and Salaries </li>
                    <li class="product-li"><span class="icon la la-check"></span>Time & Attendance </li>
                    ',
                "icon" =>  "users-cog",
                "image" =>  "products/hr.png",
                "breif" =>  "Dynamic Technology offers its clients complete end-to-end human capital information technology solutions and services including payroll and personnel management, HR dashboards, data and analysis, time and attendance, and many other services",
                "seo" =>  "NEXT HRMS: Human Resources Management",
            ],
            [
                "title"  =>  "Website and Mobile Applications Development ",
                "slug" => "website-and-mobile-applications-development",
                "content" => '
                    <li class="product-li"><span class="icon la la-check"></span>Website Design  </li>
                    <li class="product-li"><span class="icon la la-check"></span>Website Development </li>
                    <li class="product-li"><span class="icon la la-check"></span>E-commerce </li>
                    <li class="product-li"><span class="icon la la-check"></span>Search Engine Optimization </li>
                ',
                "icon" =>  "mobile",
                "image" =>  "http://codinghelptech.com/blog_post/Best-YouTube-Channels-To-Learn-Web-Development.jpg",
                "breif" =>  "Dynamic technology offers you Web Application Development Services to help you build anything from basic informational websites to complex web applications",
                "seo" =>  "Website and Mobile Applications Development",
            ],
            [
                "title"  =>  "Professional Services ",
                "slug" => "professional-services",
                "content" => '
                    <li class="product-li"><span class="icon la la-check"></span>Business Process Engineering</li>
                    <li class="product-li"><span class="icon la la-check"></span>Business Process Reengineering</li>
                    <li class="product-li"><span class="icon la la-check"></span>Industry Wise Business Analysis</li>
                    <li class="product-li"><span class="icon la la-check"></span>Specialized Enterprise Business Processes Training</li>
                ',
                "icon" =>  "project-diagram",
                "image" =>  "products/01.jpeg",
                "breif" =>  "Dynamic Professional services include ERP diagnostics studies and the professional preparation for RFP to give your organization a very powerful position in the process of selecting an enterprise system and perform a successful implementation using a very clear and powerful methodologies. ",
                "seo" =>  " ERP diagnostics studies",
            ],
        ];

        $children = [
            [
                "title" => "Complete Financial Solutions",
                "screenshot" => "products/screens/cfs.png",
                "content" => '
                    <li class="product-li"><span class="icon la la-check"></span>General Ledger </li>
                    <li class="product-li"><span class="icon la la-check"></span>Accounts Receivable </li>
                    <li class="product-li"><span class="icon la la-check"></span>Accounts Payable </li>
                    <li class="product-li"><span class="icon la la-check"></span>Cash & Banks </li>
                    <li class="product-li"><span class="icon la la-check"></span>Fixed Assets </li>
                    <li class="product-li"><span class="icon la la-check"></span>Financial Budgeting </li>
                    <li class="product-li"><span class="icon la la-check"></span>Financial Reports and Analysis </li>
                ',
                "slug" => "complete-financial-solutions",
                "icon" => "wallet",
                "seo" => "Complete Financial Solutions",
                

            ],
            [
                "title" => "Supply Chain Management ",
                "screenshot" => "products/screens/scm.png",
                "content" => '
                    <li class="product-li"><span class="icon la la-check"></span>Stock Control </li>
                    <li class="product-li"><span class="icon la la-check"></span>Warehouse Management </li>
                    <li class="product-li"><span class="icon la la-check"></span>Distribution Management </li>
                ',
                "slug" => "supply-chain-management",
                "icon" => "file-invoice-dollar",
                "seo" => "Complete Financial Solutions",
                
            ],
            [
                "title" => "Product Information Management",
                "screenshot" => "products/screens/pim.png",
                "content" => '
                 <li class="product-li"><span class="icon la la-check"></span>General Ledger </li>
                    <li class="product-li"><span class="icon la la-check"></span>Product Information </li>
                    <li class="product-li"><span class="icon la la-check"></span>Product Features </li>
                    <li class="product-li"><span class="icon la la-check"></span>Product Accounting </li>
                    <li class="product-li"><span class="icon la la-check"></span>Product Variations </li>
                    <li class="product-li"><span class="icon la la-check"></span>Product Engineering </li>
                    ',
                "slug"  => "Product-Information-Management",
                "icon"  => "product-hunt",
                "seo"   => "",
                
            ],
            [
                "title" => "Procurement Management",
                "screenshot" => "products/screens/prm.png",
                "content" => '
                 <li class="product-li"><span class="icon la la-check"></span>General Ledger </li>
                    <li class="product-li"><span class="icon la la-check"></span>Supplier Relationship Management </li>
                    <li class="product-li"><span class="icon la la-check"></span>Purchase Management </li>
                    <li class="product-li"><span class="icon la la-check"></span>Cash Supply routes </li>
                    <li class="product-li"><span class="icon la la-check"></span>Shipments and Receiving management </li>
                    <li class="product-li"><span class="icon la la-check"></span>Warranty Management </i>',
                "slug"  => "procurement-management",
                "icon"  => "cc-visa",
                "seo"   => "",
                
            ],

            [
                "title" => "Sales Management ",
                "screenshot" => "products/screens/sm.png",
                "content" => '
                   <li class="product-li"><span class="icon la la-check"></span>Sales Order Management</li>
                   <li class="product-li"><span class="icon la la-check"></span>Point Of Sales</li>
                   <li class="product-li"><span class="icon la la-check"></span>Customer Information Management</li>
                   <li class="product-li"><span class="icon la la-check"></span>Warranty Management</li>
                   <li class="product-li"><span class="icon la la-check"></span>Distribution Centers </li>
                   <li class="product-li"><span class="icon la la-check"></span>Sales Forecast</i>',
                "slug"  => "sales-management",
                "icon"  => "money",
                "seo"   => "sales managment system",
                
            ],

            [
                "title" => "Project Management",
                "screenshot" => "products/screens/pm.png",
                 "content" => '
                    <li class="product-li"><span class="icon la la-check"></span>Project Life Cycle </li>
                    <li class="product-li"><span class="icon la la-check"></span>Resources Management </li>
                    <li class="product-li"><span class="icon la la-check"></span>Contracting Management </li>
                    <li class="product-li"><span class="icon la la-check"></span>Project Costing management </li>
                    ',
                
                "slug"  => "project-managment",
                "icon"  => "tasks",
                "seo"   => "project management",
                
            ],

            [
                "title" => "Customer Relationship Management ",
                "screenshot" => "products/screens/crm.png",
                 "content" => '
                 <li class="product-li"><span class="icon la la-check"></span>Leads Management  </li>
                    <li class="product-li"><span class="icon la la-check"></span>Opportunity Management  </li>
                    <li class="product-li"><span class="icon la la-check"></span>Customer Orders History  </li>
                    <li class="product-li"><span class="icon la la-check"></span>Sales Analytics  </i>',
                
                "slug"  => "customer-relationship-management",
                "icon"  => "person-booth",
                "seo"   => "crm",
                
            ],
            [
                "title" => "Salesforce Management ",
                "screenshot" => "products/screens/sfm.png",
                 "content" => '
                    <li class="product-li"><span class="icon la la-check"></span>Sales Teams  </li>
                    <li class="product-li"><span class="icon la la-check"></span>Salesmen Information and Skill Management </li>
                    <li class="product-li"><span class="icon la la-check"></span>Commissions Management </li>
                    <li class="product-li"><span class="icon la la-check"></span>Sales Teams Evaluation </i>',
                "slug"  => "salesforce-management",
                "icon"  => "salesforce",
                "seo"   => "salesforce management",
                
            ],
            [
                "title" => "Manufacturing Management",
                "screenshot" => "products/screens/prd.png",
                 "content" => '
                 <li class="product-li"><span class="icon la la-check"></span>Manufacturing Order Management </li>
                    <li class="product-li"><span class="icon la la-check"></span>Bill Of Materials </li>
                    <li class="product-li"><span class="icon la la-check"></span>Operations Management </li>
                    <li class="product-li"><span class="icon la la-check"></span>Material Requirements Planning </li>
                    <li class="product-li"><span class="icon la la-check"></span>Production Planning </li>
                    <li class="product-li"><span class="icon la la-check"></span>Manufacturing Orders / Job Costing Management </li>
                    <li class="product-li"><span class="icon la la-check"></span>Manufactured Products Margin Analysis </li>
                    ',
                
                "slug"  => "manufacuring-management",
                "icon"  => "industry",
                "seo"   => "Manufacturing Management",
                
            ],
            [
                "title" => "E-collaboration",
                "screenshot" => "products/screens/ec.png",
                 "content" => '
                    <li class="product-li"><span class="icon la la-check"></span>OpenChatter </li>
                    <li class="product-li"><span class="icon la la-check"></span>Instant Messages by email and SMS </li>
                    ',
                
                "slug"  => "e-collaboration",
                "icon"  => "users",
                "seo"   => "E-collaboration",
                
            ],
            [
                "title" => "Reports and Analytics ",
                "screenshot" => "products/screens/ra.png",
                 "content" => '
                    <li class="product-li"><span class="icon la la-check"></span>Role-based Dashboards</li>
                    <li class="product-li"><span class="icon la la-check"></span>Process-based Dashboards </li>
                    <li class="product-li"><span class="icon la la-check"></span>Financial Analytics </li>
                    <li class="product-li"><span class="icon la la-check"></span>Vast number of reports </li>
                   ',
                
                "slug"  => "reports-and-analytics",
                "icon"  => "scroll",
                "seo"   => "Reports and Analytics",
                
            ],

        ];
        foreach($products as $product){
            Product::create($product);
        }
        $erp = Product::where("slug" ,"NEXT-ERP-Enterprise-Resource-Planning-ERP")->first();
        foreach($children as $product){
            $product['parent_id'] = $erp->id;
            Product::create($product);
        }
    }
}
