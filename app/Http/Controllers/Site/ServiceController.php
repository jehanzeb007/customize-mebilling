<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;

class ServiceController extends Controller
{
    public function revenu_optimzation()
    {
        $data = [];
        $data["heading"] = "Our Services";
        $data["breadcrumb"] = "Revenue Optimization";
        return view('sites.our_services.revenu-optimzation', $data);
    }

    public function revenue_cycle_management()
    {
        $data = [];
        $data["heading"] = "Our Services";
        $data["breadcrumb"] = "Revenue Cycle Management";
        return view('sites.our_services.revenue-cycle-management', $data);
    }

    public function medical_billing_coding()
    {
        $data = [];
        $data["heading"] = "Our Services";
        $data["breadcrumb"] = "Medical Billing";
        return view('sites.our_services.medical-billing-coding', $data);
    }

    public function medical_coding()
    {
        $data = [];
        $data["heading"] = "Our Services";
        $data["breadcrumb"] = "Medical Coding";
        return view('sites.our_services.medical-coding', $data);
    }


    public function medical_pratice_analytics()
    {
        $data = [];
        $data["heading"] = "Our Services";
        $data["breadcrumb"] = "Practice Performance Analysis";
        return view('sites.our_services.medical-pratice-analytics', $data);
    }

    public function credentialing_contracting()
    {
        $data = [];
        $data["heading"] = "Our Services";
        $data["breadcrumb"] = "Credentialing & Contracting";
        return view('sites.our_services.credentialing-contracting', $data);
    }

    public function specialties()
    {
        $data = [];
        $data["heading"] = "Specialties";
        $data["breadcrumb"] = "Specialties";
        return view('sites.specialties.specialties',$data);
    }

}
