$(document).ready(function () {

    $("#feedtable").DataTable({


        ajax: {
            url: "/api/feed",
            dataSrc: "",
        },
        dom: '<"top"<"left-col"B><"center-col"l><"right-col"f>>rtip',
        buttons: [{
            extend: 'pdf',
            className: 'btn btn-info glyphicon glyphicon-file'
        },
        {
            extend: 'excel',
            className: 'btn btn-info glyphicon glyphicon-list-alt'
        },
        ],


        columns: [{
            data: "id",
          
        },
        {
            data: "status",
           
        },
        {
            data: "created_at",
           
        },
       


        ],
    });

    $("#watertable").DataTable({


        ajax: {
            url: "/api/water",
            dataSrc: "",
        },
        dom: '<"top"<"left-col"B><"center-col"l><"right-col"f>>rtip',
        buttons: [{
            extend: 'pdf',
            className: 'btn btn-info glyphicon glyphicon-file'
        },
        {
            extend: 'excel',
            className: 'btn btn-info glyphicon glyphicon-list-alt'
        },
        ],


        columns: [{
            data: "id",
          
        },
        {
            data: "level",
           
        },
        {
            data: "status",
           
        },
        {
            data: "created_at",
           
        },
       


        ],
    });

    $("#turditable").DataTable({


        ajax: {
            url: "/api/turdibity",
            dataSrc: "",
        },
        dom: '<"top"<"left-col"B><"center-col"l><"right-col"f>>rtip',
        buttons: [{
            extend: 'pdf',
            className: 'btn btn-info glyphicon glyphicon-file'
        },
        {
            extend: 'excel',
            className: 'btn btn-info glyphicon glyphicon-list-alt'
        },
        ],


        columns: [{
            data: "id",
          
        },
        {
            data: "turbidity",
           
        },
        {
            data: "status",
           
        },
        {
            data: "created_at",
           
        },
       


        ],
    });

    $.ajax({
        type: "GET",
        url: "/api/feed-chart",
        dataType: "json",
        success: function (data) {
            console.log(data);
            var ctx = $("#feedchart");
            const chartAreaBorder = {
                id: 'chartAreaBorder',
                beforeDraw(chart, args, options) {
                    const {
                        ctx,
                        chartArea: {
                            left,
                            top,
                            width,
                            height
                        }
                    } = chart;
                    ctx.save();
                    ctx.strokeStyle = options.borderColor;
                    ctx.lineWidth = options.borderWidth;
                    ctx.setLineDash(options.borderDash || []);
                    ctx.lineDashOffset = options.borderDashOffset;
                    ctx.strokeRect(left, top, width, height);
                    ctx.restore();
                }
            };
            var myBarChart = new Chart(ctx, {
                type: 'pie',
                data: {
                   
                    labels: data.labels,
                    datasets: [{
                        label: 'Temperature Chart',
                        data: data.data,
                        backgroundColor: [
                            'rgba(75, 192, 192, 0.2)',
                            'rgba(255, 99, 132, 0.2)',
                            'rgb(255,0,0)',
                            'rgb(255,0,255)',
                            'rgb(255,165,0)'
                        ],
                        borderColor: [
                            'rgba(75, 192, 192, 1)',
                            'rgba(255,99,132,1)'
                        ],
                        borderWidth: 1
                    }]
                },
                options: {
                    scales: {
                        y: {
                            beginAtZero: true
                        }
                    },
                    plugins: {
                        chartAreaBorder: {
                            borderColor: 'blue',
                            borderWidth: 3,
                            borderDash: [0, 0],
                            borderDashOffset: 2,
                        }
                    }
                },
                plugins: [chartAreaBorder]
            });
        },
        error: function (error) {
            console.log(error);
        }
    });

    $.ajax({
        type: "GET",
        url: "/api/water-chart",
        dataType: "json",
        success: function (data) {
            console.log(data);
            var ctx = $("#waterchart");
            var myBarChart = new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: data.labels,
                    datasets: [{
                        label: 'Water Level',
                        data: data.data,
                        backgroundColor: [
                            'rgba(255, 99, 132, 0.2)',
                            'rgba(54, 162, 235, 0.2)',
                            'rgba(255, 206, 86, 0.2)',
                            'rgba(75, 192, 192, 0.2)',
                            'rgba(153, 102, 255, 0.2)',
                            'rgba(255, 159, 64, 0.2)'
                        ],
                        borderColor: [
                            'rgba(255,99,132,1)',
                            'rgba(54, 162, 235, 1)',
                            'rgba(255, 206, 86, 1)',
                            'rgba(75, 192, 192, 1)',
                            'rgba(153, 102, 255, 1)',
                            'rgba(255, 159, 64, 1)'
                           
                        ],
                        borderWidth: 1,
                        borderRadius: Number.MAX_VALUE,
                        borderSkipped: false,
                    }]
                },
                options: {
                    responsive: true,
                    plugins: {
                        legend: {
                            position: 'top',
                        }
                    }
                },
            });
    
        },
        error: function (error) {
            console.log(error);
        }
    });

    $.ajax({
        type: "GET",
        url: "/api/filter-chart",
        dataType: "json",
        success: function (data) {
            console.log(data);
            var ctx = $("#filterchart");
            var myBarChart = new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: data.labels,
                    datasets: [{
                        label: 'Top Product',
                        data: data.data,
                        backgroundColor: [
                            'rgba(255, 99, 132, 0.2)',
                            'rgba(54, 162, 235, 0.2)',
                            'rgba(255, 206, 86, 0.2)',
                            'rgba(75, 192, 192, 0.2)',
                            'rgba(153, 102, 255, 0.2)',
                            'rgba(255, 159, 64, 0.2)'
                        ],
                        borderColor: [
                            'rgba(255,99,132,1)',
                            'rgba(54, 162, 235, 1)',
                            'rgba(255, 206, 86, 1)',
                            'rgba(75, 192, 192, 1)',
                            'rgba(153, 102, 255, 1)',
                            'rgba(255, 159, 64, 1)'
                           
                        ],
                        borderWidth: 1,
                        borderRadius: Number.MAX_VALUE,
                        borderSkipped: false,
                    }]
                },
                options: {
                    responsive: true,
                    plugins: {
                        legend: {
                            position: 'top',
                        }
                    }
                },
            });
    
        },
        error: function (error) {
            console.log(error);
        }
    });
});