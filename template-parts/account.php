<?php
/**
 * Template Name: Account
 */
?>

<?php include 'portal-header.php'; ?>

  <div class="dashboard-main-body">

    <div class="row gy-4">
        <div class="col-12">
            <div class="radius-12">
                <div class="card-body p-16">
                    <div class="row gy-4">
                        <div class="col-xxl-3 col-xl-4 col-sm-6">
                            <div class="px-20 py-16 shadow-none radius-8 h-100 position-relative overflow-hidden bg-white">
                                <div class="d-flex flex-wrap align-items-center justify-content-between gap-1 mb-8">
                                    <div>
                                        <span class="mb-2 fw-medium text-secondary-light text-md">Total Investment</span>
                                        <h6 class="fw-semibold mb-1">£<?php echo get_field('total_investment', 'user_' . $user_id);?></h6>
                                    </div>
                                      <span class="w-44-px h-44-px radius-8 d-inline-flex justify-content-center align-items-center text-2xl mb-12">
                                        <img src="<?php echo site_url(); ?>/wp-content/themes/hello-elementor/account/assets/images/grafix.png">
                                    </span>
                                </div>
                                <p class="text-sm mb-0"><span class="bg-success-focus px-1 rounded-2 fw-medium text-success-main text-sm"><i class="ri-arrow-right-up-line"></i> 80%</span> From last month </p>
                            </div>
                        </div>
                        <div class="col-xxl-3 col-xl-4 col-sm-6">
                            <div class="px-20 py-16 shadow-none radius-8 h-100  position-relative overflow-hidden bg-white">
                                <div class="d-flex flex-wrap align-items-center justify-content-between gap-1 mb-8">
                                    <div>
                                        <span class="mb-2 fw-medium text-secondary-light text-md">Amount Earned</span>
                                        <h6 class="fw-semibold mb-1">£35,000</h6>
                                    </div>
                                      <span class="w-44-px h-44-px radius-8 d-inline-flex justify-content-center align-items-center text-2xl mb-12">
                                        <img src="<?php echo site_url(); ?>/wp-content/themes/hello-elementor/account/assets/images/grafix.png">
                                    </span>
                                </div>
                                <p class="text-sm mb-0"><span class="bg-success-focus px-1 rounded-2 fw-medium text-success-main text-sm"><i class="ri-arrow-right-up-line"></i> 95%</span> From last month </p>
                            </div>
                        </div>
                        <div class="col-xxl-3 col-xl-4 col-sm-6">
                            <div class="px-20 py-16 shadow-none radius-8 h-100 position-relative overflow-hidden bg-white">
                                <div class="d-flex flex-wrap align-items-center justify-content-between gap-1 mb-8">
                                    <div>
                                        <span class="mb-2 fw-medium text-secondary-light text-md">Days Invested</span>
                                        <h6 class="fw-semibold mb-1"><?php

                                        $start_date = get_field('start_date', 'user_' . $user_id);
                                        // Set the target date
                                        $target_date = DateTime::createFromFormat('d/m/Y', $start_date);

                                        // Get today's date
                                        $today = new DateTime();

                                        // Calculate the difference
                                        $interval = $today->diff($target_date);

                                        // Get the number of days
                                        $days_difference = $interval->days;

                                        // Display the result
                                        echo $days_difference . " Days" ;
                                        ?></h6>
                                    </div>
                                    <span class="w-44-px h-44-px radius-8 d-inline-flex justify-content-center align-items-center text-2xl mb-12">
                                        <img src="<?php echo site_url(); ?>/wp-content/themes/hello-elementor/account/assets/images/grafix.png">
                                    </span>
                                </div>
                                <p class="text-sm mb-0"><span class="px-1 rounded-2 fw-medium text-sm">Start Date:</span><?php echo get_field('start_date', 'user_' . $user_id);?>
</p>
                            </div>
                        </div>
                        <div class="col-xxl-3 col-xl-4 col-sm-6">
                            <div class="px-20 py-16 shadow-none radius-8 h-100 position-relative overflow-hidden bg-white">
                                <div class="d-flex flex-wrap align-items-center justify-content-between gap-1 mb-8">
                                    <div>
                                        <span class="mb-2 fw-medium text-secondary-light text-md">Total Expense</span>
                                        <h6 class="fw-semibold mb-1">$7,000</h6>
                                    </div>
                                    <span class="w-44-px h-44-px radius-8 d-inline-flex justify-content-center align-items-center text-2xl mb-12">
                                        <img src="<?php echo site_url(); ?>/wp-content/themes/hello-elementor/account/assets/images/grafix.png">
                                    </span>
                                </div>
                                <p class="text-sm mb-0"><span class="bg-success-focus px-1 rounded-2 fw-medium text-success-main text-sm"><i class="ri-arrow-right-up-line"></i> 60%</span> From last month </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xxl-8">
            <div class="card h-100">
                <div class="card-body p-24 mb-8">
                    <div class="d-flex align-items-center flex-wrap gap-2 justify-content-between">
                        <h2 class="mb-2 fw-bold text-xl mb-0">Income Statistics </h2>
                        <select class="form-select form-select-sm w-auto bg-base border text-secondary-light">
                            <option>Yearly</option>
                            <option>Monthly</option>
                            <option>Weekly</option>
                            <option>Today</option>
                        </select>
                    </div>
                    
                    <div id="incomeExpense" class="apexcharts-tooltip-style-1"></div>
                </div>
            </div>
        </div>
        <div class="col-xxl-4 col-md-12">
            <div class="card pb-4">
                <div class="card-header border-bottom">
                    <div class="d-flex align-items-center flex-wrap gap-2 justify-content-between">
                        <h6 class="mb-2 fw-bold text-lg mb-0">Newsfeed</h6>
                        <a target="_blank" href="/news/" class="text-primary-600 hover-text-primary d-flex align-items-center gap-1">
                            View All
                            <iconify-icon icon="solar:alt-arrow-right-linear" class="icon"></iconify-icon>
                        </a>
                    </div>
                </div>
                <?php
                // Define custom query parameters
                $args = array(
                    'posts_per_page' => 5, // Number of posts to display
                    'post_type'      => 'post', // Post type to query
                );

                // The custom query
                $latest_posts = new WP_Query( $args );

                $latest_posts = new WP_Query(array(
                    'post_type'      => 'post',
                    'posts_per_page' => 5, // Limit to 5 posts
                ));

                if ( $latest_posts->have_posts() ) : 
                    while ( $latest_posts->have_posts() ) : $latest_posts->the_post(); ?>
                        <div class="d-flex p-20">
                            <a target="_blank" href="<?php the_permalink(); ?>" class="d-flex w-100 text-decoration-none text-inherit">
                                <?php if ( has_post_thumbnail() ) : ?>
                                    <div class="w-90-px h-full flex-shrink-0 me-12 overflow-hidden">
                                      <img class="rounded-circle" src="<?php echo get_the_post_thumbnail_url(); ?>" alt="Post Thumbnail">
                                    </div>
                                <?php endif; ?>
                                <div>
                                    <h6 class="text-md mb-0"><?php the_title(); ?></h6>
                                    <span><?php echo get_the_excerpt(); ?></span>
                                    <?php echo get_the_date(); ?>
                                </div>
                            </a>
                        </div>
                        <hr class="h-px my-8 bg-gray-200 border-1 dark:bg-gray-700 mx-20">
                    <?php endwhile; 
                    wp_reset_postdata(); // Reset post data
                else : 
                    echo '<p>No posts found.</p>';
                endif;
                ?>
                
            </div>
        </div>
        
        
        
    </div>
  </div>
  <footer class="d-footer">
  <div class="row align-items-center justify-content-between">
    <div class="col-auto">
      <p class="mb-0">© 2024 LX Network. All Rights Reserved.</p>
    </div>
    <div class="col-auto">
      <p class="mb-0">Made by <span class="text-primary-600">Parallel Digital</span></p>
    </div>
  </div>
</footer>
</main>
  <!-- jQuery library js -->
  <script src="<?php echo site_url(); ?>/wp-content/themes/hello-elementor/account/assets/js/lib/jquery-3.7.1.min.js"></script>
  <!-- Bootstrap js -->
  <script src="<?php echo site_url(); ?>/wp-content/themes/hello-elementor/account/assets/js/lib/bootstrap.bundle.min.js"></script>
  <!-- Apex Chart js -->
  <script src="<?php echo site_url(); ?>/wp-content/themes/hello-elementor/account/assets/js/lib/apexcharts.min.js"></script>
  <!-- Data Table js -->
  <script src="<?php echo site_url(); ?>/wp-content/themes/hello-elementor/account/assets/js/lib/dataTables.min.js"></script>
  <!-- Iconify Font js -->
  <script src="<?php echo site_url(); ?>/wp-content/themes/hello-elementor/account/assets/js/lib/iconify-icon.min.js"></script>
  <!-- jQuery UI js -->
  <script src="<?php echo site_url(); ?>/wp-content/themes/hello-elementor/account/assets/js/lib/jquery-ui.min.js"></script>
  <!-- Vector Map js -->
  <script src="<?php echo site_url(); ?>/wp-content/themes/hello-elementor/account/assets/js/lib/jquery-jvectormap-2.0.5.min.js"></script>
  <script src="<?php echo site_url(); ?>/wp-content/themes/hello-elementor/account/assets/js/lib/jquery-jvectormap-world-mill-en.js"></script>
  <!-- Popup js -->
  <script src="<?php echo site_url(); ?>/wp-content/themes/hello-elementor/account/assets/js/lib/magnifc-popup.min.js"></script>
  <!-- Slick Slider js -->
  <script src="<?php echo site_url(); ?>/wp-content/themes/hello-elementor/account/assets/js/lib/slick.min.js"></script>
  <!-- prism js -->
  <script src="<?php echo site_url(); ?>/wp-content/themes/hello-elementor/account/assets/js/lib/prism.js"></script>
  <!-- file upload js -->
  <script src="<?php echo site_url(); ?>/wp-content/themes/hello-elementor/account/assets/js/lib/file-upload.js"></script>
  <!-- audioplayer -->
  <script src="<?php echo site_url(); ?>/wp-content/themes/hello-elementor/account/assets/js/lib/audioplayer.js"></script>
  
  <!-- main js -->
  <script src="<?php echo site_url(); ?>/wp-content/themes/hello-elementor/account/assets/js/app.js"></script>
<script>
    
    // ===================== Income VS Expense Start =============================== 
   function createChartTwo(chartId, color1, color2) {
    // Sample data fetched from PHP
     var rawData = [
    <?php 
    echo get_field('oct_24', 'user_' . $user_id) !== null && get_field('oct_24', 'user_' . $user_id) !== '' ? get_field('oct_24', 'user_' . $user_id) : 0; 
    ?>,
    <?php 
    echo get_field('nov_24', 'user_' . $user_id) !== null && get_field('nov_24', 'user_' . $user_id) !== '' ? get_field('nov_24', 'user_' . $user_id) : 0; 
    ?>,
    <?php 
    echo get_field('dec_24', 'user_' . $user_id) !== null && get_field('dec_24', 'user_' . $user_id) !== '' ? get_field('dec_24', 'user_' . $user_id) : 0; 
    ?>,
    <?php 
    echo get_field('jan_25', 'user_' . $user_id) !== null && get_field('jan_25', 'user_' . $user_id) !== '' ? get_field('jan_25', 'user_' . $user_id) : 0; 
    ?>,
    <?php 
    echo get_field('feb_25', 'user_' . $user_id) !== null && get_field('feb_25', 'user_' . $user_id) !== '' ? get_field('feb_25', 'user_' . $user_id) : 0; 
    ?>,
    <?php 
    echo get_field('mar_25', 'user_' . $user_id) !== null && get_field('mar_25', 'user_' . $user_id) !== '' ? get_field('mar_25', 'user_' . $user_id) : 0; 
    ?>,
    <?php 
    echo get_field('apr_25', 'user_' . $user_id) !== null && get_field('apr_25', 'user_' . $user_id) !== '' ? get_field('apr_25', 'user_' . $user_id) : 0; 
    ?>,
    <?php 
    echo get_field('may_25', 'user_' . $user_id) !== null && get_field('may_25', 'user_' . $user_id) !== '' ? get_field('may_25', 'user_' . $user_id) : 0; 
    ?>,
    <?php 
    echo get_field('jun_25', 'user_' . $user_id) !== null && get_field('jun_25', 'user_' . $user_id) !== '' ? get_field('jun_25', 'user_' . $user_id) : 0; 
    ?>,
    <?php 
    echo get_field('jul_25', 'user_' . $user_id) !== null && get_field('jul_25', 'user_' . $user_id) !== '' ? get_field('jul_25', 'user_' . $user_id) : 0; 
    ?>,
    <?php 
    echo get_field('aug_25', 'user_' . $user_id) !== null && get_field('aug_25', 'user_' . $user_id) !== '' ? get_field('aug_25', 'user_' . $user_id) : 0; 
    ?>,
    <?php 
    echo get_field('sep_25', 'user_' . $user_id) !== null && get_field('sep_25', 'user_' . $user_id) !== '' ? get_field('sep_25', 'user_' . $user_id) : 0; 
    ?>,
    <?php 
    echo get_field('oct_25', 'user_' . $user_id) !== null && get_field('oct_25', 'user_' . $user_id) !== '' ? get_field('oct_25', 'user_' . $user_id) : 0; 
    ?>

    ];

  // Find the last non-zero value
    let lastNonZero = 0;
    for (let i = rawData.length - 1; i >= 0; i--) {
        if (rawData[i] !== 0) {
            lastNonZero = rawData[i];
            break;
        }
    }

    // Calculate profit
    let profit = lastNonZero - <?php echo get_field('total_investment', 'user_' . $user_id);?> ;

    // Output profit or use it in the chart
    console.log("Profit:", profit);

    // Function to replace 0, null, or empty with the last valid number
    function processData(data) {
        let lastValid = 0; // Start with 0 as the last valid number
        return data.map(value => {
            // Convert to number and handle undefined, null, or empty values
            value = Number(value);
            if (isNaN(value) || value === 0) {
                return lastValid; // Use last valid number
            }
            lastValid = value; // Update last valid number
            return value; // Return the current valid value
        });
    }

    var processedData = processData(rawData);

    var options = {
        series: [{
            name: 'Amount',
            data: processedData
        }],
        legend: {
            show: false 
        },
        chart: {
            type: 'area',
            width: '100%',
            height: '100%',
            toolbar: {
                show: false
            },
            padding: {
                left: 0,
                right: 0,
                top: 0,
                bottom: 0
            }
        },
        dataLabels: {
            enabled: false
        },
        stroke: {
            curve: 'smooth',
            width: 3,
            colors: ['#FF3C48'],
            lineCap: 'round'
        },
        grid: {
            show: true,
            borderColor: '#D1D5DB',
            strokeDashArray: 1,
            position: 'back',
            xaxis: {
                lines: {
                    show: false
                }
            },
            yaxis: {
                lines: {
                    show: true
                }
            },
            padding: {
                top: -20,
                right: 0,
                bottom: -10,
                left: 0
            },
        },
        fill: {
            type: 'gradient',
            colors: ['#FF3C48'],
            gradient: {
                shade: 'light',
                type: 'vertical',
                shadeIntensity: 0.2,
                gradientToColors: [undefined, `${color2}00`],
                inverseColors: false,
                opacityFrom: [0.7, 0.1],
                opacityTo: [0.1, 0.1],
                stops: [0, 80],
            },
        },
        markers: {
            colors: [color1, color2],
            strokeWidth: 3,
            size: 0,
            hover: {
                size: 10
            }
        },
        xaxis: {
            labels: {
                show: true
            },
            categories: ['Oct24', 'Nov24', 'Dec24', 'Jan25', 'Feb25', 'Mar25', 'Apr25', 'May25', 'Jun25', 'Jul25', 'Aug25', 'Sep25'],
            tooltip: {
                enabled: false
            },
            labels: {
                formatter: function (value) {
                    return value;
                },
                style: {
                    fontSize: "14px"
                }
            }
        },
        yaxis: {
            labels: {
                formatter: function (value) {
                    return "£" + value;
                },
                style: {
                    fontSize: "14px"
                }
            },
        },
        tooltip: {
            x: {
                format: 'dd/MM/yy HH:mm'
            }
        }
    };

    var chart = new ApexCharts(document.querySelector(`#${chartId}`), options);
    chart.render();

}
    createChartTwo('incomeExpense', '#487FFF', '#FF9F29');
    // ===================== Income VS Expense End =============================== 


     
  
    

</script>



</body>
</html>