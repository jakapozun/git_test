<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function search()
    {
        $response = [[["IT-KPI", "1", "2", null, null], ["IT-KPI", "2", "1", null, null], ["IT-KPI", "3", "0", null, null], ["IT-KPI", "4", "0", null, null], ["IT-KPI", "5", "0", null, null], ["IT-KPI", "6", "0", null, null], ["IT-KPI", "7", "0", null, null], ["IT-KPI", "8", "0", null, null], ["IT-KPI", "9", "0", null, null]], [["HRRework-I.Faza", "1", "2", null, null], ["HRRework-I.Faza", "2", "2", null, null], ["HRRework-I.Faza", "3", "2", null, null], ["HRRework-I.Faza", "4", "2", null, null], ["HRRework-I.Faza", "5", "1", "2021-03-12", null], ["HRRework-I.Faza", "6", "0", "2021-02-19", null], ["HRRework-I.Faza", "7", "0", "2021-02-26", null], ["HRRework-I.Faza", "8", "0", "2021-04-01", null], ["HRRework-I.Faza", "9", "0", "2021-07-01", null]], [["Jira-Spremembe", "1", "2", "2021-02-11", "2021-02-10"], ["Jira-Spremembe", "2", "2", "2019-11-22", "2019-11-22"], ["Jira-Spremembe", "3", "2", "2019-11-29", "2019-11-29"], ["Jira-Spremembe", "4", "2", "2019-12-06", "2019-12-06"], ["Jira-Spremembe", "5", "2", "2020-12-01", "2020-12-01"], ["Jira-Spremembe", "6", "1", "2021-02-12", null], ["Jira-Spremembe", "7", "0", "2021-02-12", null], ["Jira-Spremembe", "8", "0", "2021-02-19", null], ["Jira-Spremembe", "9", "0", "2021-05-19", null]]];
        $projects = $response;
        return view('search', compact('projects'));
    }

    public function data()
    {
        $response = [[["IT-KPI", "1", "2", null, null], ["IT-KPI", "2", "1", null, null], ["IT-KPI", "3", "0", null, null], ["IT-KPI", "4", "0", null, null], ["IT-KPI", "5", "0", null, null], ["IT-KPI", "6", "0", null, null], ["IT-KPI", "7", "0", null, null], ["IT-KPI", "8", "0", null, null], ["IT-KPI", "9", "0", null, null]], [["HRRework-I.Faza", "1", "2", null, null], ["HRRework-I.Faza", "2", "2", null, null], ["HRRework-I.Faza", "3", "2", null, null], ["HRRework-I.Faza", "4", "2", null, null], ["HRRework-I.Faza", "5", "1", "2021-03-12", null], ["HRRework-I.Faza", "6", "0", "2021-02-19", null], ["HRRework-I.Faza", "7", "0", "2021-02-26", null], ["HRRework-I.Faza", "8", "0", "2021-04-01", null], ["HRRework-I.Faza", "9", "0", "2021-07-01", null]], [["Jira-Spremembe", "1", "2", "2021-02-11", "2021-02-10"], ["Jira-Spremembe", "2", "2", "2019-11-22", "2019-11-22"], ["Jira-Spremembe", "3", "2", "2019-11-29", "2019-11-29"], ["Jira-Spremembe", "4", "2", "2019-12-06", "2019-12-06"], ["Jira-Spremembe", "5", "2", "2020-12-01", "2020-12-01"], ["Jira-Spremembe", "6", "1", "2021-02-12", null], ["Jira-Spremembe", "7", "0", "2021-02-12", null], ["Jira-Spremembe", "8", "0", "2021-02-19", null], ["Jira-Spremembe", "9", "0", "2021-05-19", null]]];

        return json_encode($response);
    }
}
