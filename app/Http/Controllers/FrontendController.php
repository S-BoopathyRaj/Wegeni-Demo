<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function itproduct()
    {
        return view('solutions.techsolutions.it-product');
    }
    public function itservice()
    {
        return view('solutions.techsolutions.it-service');
    }

    public function ecommerce()
    {
        return view('solutions.techsolutions.E-commerce');
    }
    public function webapplication()
    {
        return view('solutions.techsolutions.web-application');
    }
    public function customererp()
    {
        return view('solutions.techsolutions.customer-erp-system');
    }
    public function customcrm()
    {
        return view('solutions.techsolutions.custom-crm');
    }
    public function customizeweb()
    {
        return view('solutions.techsolutions.customise-web');
    }
    public function cloudvps()
    {
        return view('solutions.techsolutions.cloudvps');
    }
    public function artificial()
    {
        return view('solutions.techsolutions.artificial');
    }
    public function meachinelearning()
    {
        return view('solutions.techsolutions.machinelearning');
    }
    public function Career()
    {
        return view('Career');
    }
    public function contact()
    {
        return view('contact');
    }
    public function educational()
    {
        return view('solutions.educational');
    }
 //Know Us


    public function aboutus()
    {
        return view('knowus.aboutus');
    }
    public function leadership()
    {
        return view('knowus.leadership');
    }
    public function internship()
    {
        return view('knowus.internship');
    }
    public function hospitalmanagement()
    {
        return view('knowus.hospital-management');
    }
    public function ultimatepos()
    {
        return view('knowus.ultimate-pos');
    }
    public function property()
    {
        return view('knowus.property');
    }
    public function schoolmanagement()
    {
        return view('knowus.schoolacademic-management');
    }
    public function aluminimanagement()
    {
        return view('knowus.alumini-management');
    }
    public function multivendorecommerce()
    {
        return view('knowus.multivendor-ecommerce');
    }
    public function fashion()
    {
        return view('Industries.fashion-modernisation');
    }
    public function wellness()
    {
        return view('Industries.wellness');
    }
    public function retail()
    {
        return view('Industries.retail-ecommerce');
    }
    public function manufacturing()
    {
        return view('Industries.industrial-manufacturing');
    }
    public function nonprofit()
    {
        return view('Industries.non-profit');
    }
    public function publicsector()
    {
        return view('Industries.sector');
    }
    public function FinancialInsurance()
    {
        return view('Industries.financial-service-and-Insurance');
    }
    public function healthcarehospitals()
    {
        return view('Industries.healthcare- hospital');
    }
    public function education()
    {
        return view('Industries.education');
    }
    public function logistics()
    {
        return view('Industries.logistics-supply- chain');
    }
    public function energyutilities()
    {
        return view('Industries.energy');
    }

    public function TravelHospitalitys()
    {
        return view('Industries.travel-hospitality');
    }
    public function productplatform()
    {
        return view('Industries.product-platform');
    }

    public function constructioninfrastructure()
    {
        return view('Industries.construction-infrastructure');
    }
    public function ManagementConsulting()
    {
        return view('Industries.management-consulting');
    }
    public function MarketingAdvertising()
    {
        return view('Industries.marketing-advertising');
    }

    public function PersonalBranding()
    {
        return view('solutions.brandsolutions.personal-branding');
    }


    public function CorporateBranding()
    {
        return view('solutions.brandsolutions.corporate-branding');
    }

    public function ProductBranding()
    {
        return view('solutions.brandsolutions.product-branding');
    }

    public function ServicesBranding()
    {
        return view('solutions.brandsolutions.services-branding');
    }

    public function DigitalBranding()
    {
        return view('solutions.brandsolutions.digital-branding');
    }

    public function EmployerBranding()
    {
        return view('solutions.brandsolutions.employer-branding');
    }

    //BusinessSolutions
    public function ProcessReEngineering()
    {
        return view('solutions.businesssolutions.process-reengineering');
    }

    public function StrategicPlanning()
    {
        return view('solutions.businesssolutions.Strategic-planning');
    }

    public function OperationsSystems()
    {
        return view('solutions.businesssolutions.operations-systems');
    }

    public function ProjectManagement()
    {
        return view('solutions.businesssolutions.project-management');
    }

    public function WorkflowOptimization()
    {
        return view('solutions.businesssolutions.workflow-optimization');
    }

    public function SupplychainManagement()
    {
        return view('solutions.businesssolutions.supplychain-management');
    }

    public function LogisticManagement()
    {
        return view('solutions.businesssolutions.logistic-management');
    }

    //Event Solutions
    public function eventstrategy()
    {
        return view('solutions.eventsolutions.event-strategy');
    }

    public function logistic_management()
    {
        return view('solutions.eventsolutions.logistic-management');
    }

    public function vendorcoordinations()
    {
        return view('solutions.eventsolutions.vendor-coordination');
    }

    public function guestexperience()
    {
        return view('solutions.eventsolutions.guest-experiences');
    }

    public function budget()
    {
        return view('solutions.eventsolutions.budget');
    }

    public function posteventanalysis()
    {
        return view('solutions.eventsolutions.postevent-analysis');
    }

    //Marketing Solutions
    public function contentmarketing()
    {
        return view('solutions.marketingsolutions.content-marketing');
    }

    public function digitalmarketing()
    {
        return view('solutions.marketingsolutions.digital-marketing');
    }

    public function socialmediamarketing()
    {
        return view('solutions.marketingsolutions.socialmedia-marketing');
    }

    public function emailmarketing()
    {
        return view('solutions.marketingsolutions.email-marketing');
    }

    public function influencermarketing()
    {
        return view('solutions.marketingsolutions.influencer-marketing');
    }

    public function searchenginemarketing()
    {
        return view('solutions.marketingsolutions.searchengine-marketing');
    }

    public function searchengineoptimization()
    {
        return view('solutions.marketingsolutions.searchengine-optimization');
    }

    //Ads Solutions
    public function applicationadvertisement()
    {
        return view('solutions.adssolutions.application-advertisement');
    }

    public function digitaladvertisement()
    {
        return view('solutions.adssolutions.digital-advertisement');
    }

    public function printadvertisement()
    {
        return view('solutions.adssolutions.print-advertisement');
    }

    public function socialmediaadvertisement()
    {
        return view('solutions.adssolutions.socialmedia-advertisement');
    }

    public function contentcreationsolution()
    {
        return view('solutions.mediasolutions.contentcreation-solution');
    }

    //Media Solutions
    public function digitalmediasolution()
    {
        return view('solutions.mediasolutions.digitalmedia-solution');
    }

    public function photographysolution()
    {
        return view('solutions.mediasolutions.photography-solution');
    }


    public function printmediasolution()
    {
        return view('solutions.mediasolutions.printmedia-solution');
    }


    public function publicrelationsolution()
    {
        return view('solutions.mediasolutions.publicrelation-solution');
    }


    public function socialmediasolution()
    {
        return view('solutions.mediasolutions.socialmedia-solution');
    }


    public function videoproductionsolution()
    {
        return view('solutions.mediasolutions.videoproduction-solution');
    }


    //Political Solution
    public function politicalsolution()
    {
        return view('solutions.political-solution');
    }

    //Education Solution
    public function educationsolution()
    {
        return view('solutions.education-solution');
    }

    //footer
    public function faq()
    {
        return view('footer.faq');
    }

}
