<?php

namespace App\Services;


class DashboardService
{
    /**
     * This is where you implement your logic to get the data for a
     * chart. We begin here with an example to get you started.
     * It will most likely come from DB or webservice.
     *
     * @return array
     */
    public function getChart2Data()
    {
        $title = 'Sales Overview';

        $subtitle = 'Ample Admin Vs Pixel Admin';

        $seriesTitles = [
            "Ample",
            "Pixel",
        ];

        $seriesClasses = [
            "text-success",
            "text-info",
        ];

        $series = [
            [9, 5, 3, 7, 5, 10, 3],
            [6, 3, 9, 5, 4, 6, 4]
        ];

        $labels = ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun'];

        $high = collect($series)->flatten()->max() + 2;

        $low = 0;

        return [
            'title'         => $title,
            'subtitle'      => $subtitle,
            'seriesTitles'  => $seriesTitles,
            'seriesClasses'  => $seriesClasses,
            'labels'        => $labels,
            'series'        => $series,
            'high'          => $high,
            'low'           => $low,
        ];
    }

    public function getChartCampaignData()
    {
        $title = 'Newsletter Campaign';

        $subtitle = 'Overview of Newsletter Campaign';

        $series = [
            [0, 5, 6, 8, 25, 9, 8, 24],
            [0, 3, 1, 2, 8, 1, 5, 1]
        ];

        $labels = [1, 2, 3, 4, 5, 6, 7, 8];

        $high = collect($series)->flatten()->max() + 4;

        $low = 0;

        return [
            'title'         => $title,
            'subtitle'      => $subtitle,
            'labels'        => $labels,
            'series'        => $series,
            'high'          => $high,
            'low'           => $low,
        ];
    }

    public function getChartVisitorsData()
    {
        $title = 'Our Visitors';

        $subtitle = 'Different Devices Used to Visit';

        $columns = [
            ['Desktop', 10],
            ['Tablet', 40],
            ['Mobile', 50],
        ];

        $pattern = ['#745af2', '#26c6da', '#1e88e5'];

        return [
            'title'    => $title,
            'subtitle' => $subtitle,
            'columns'  => $columns,
            'pattern'  => $pattern
        ];
    }

}