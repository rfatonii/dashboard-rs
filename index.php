<?php
include "conf/config.php";
?>
<!DOCTYPE html>
<html lang="en">
    <?php include 'include/head.php';?>
<body style="font-family: 'Poppins', sans-serif;color: black;">

<!-- include navbar -->
    <?php include 'include/navbar.php'; ?>

    <!-- container -->
    <div class="container">
        <div class="row mb-3">
            <h2>Dashboard Rawat Jalan</h2>
        </div>

        <div class="row">
            <div class="col-lg-6 col-sm-6">
                <div class="card shadow">
                    <div class="stat-widget-one card-body">
                        <div class="stat-icon d-inline-block rounded-sm p-1">
                            <i class="ti-wheelchair text-primary border-success text-success"></i>
                        </div>
                        <div class="stat-content d-inline-block p-1">
                            <div class="stat-text">Pasien Eksekutif</div>
                            <div class="stat-digit">91</div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-6 col-sm-6">
                <div class="card shadow">
                    <div class="stat-widget-one card-body">
                        <div class="stat-icon d-inline-block p-1">
                            <i class="ti-wheelchair text-primary border-primary"></i>
                        </div>
                        <div class="stat-content d-inline-block p-1">
                            <div class="stat-text">Pasien Reguler</div>
                            <div class="stat-digit">1791</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>



        <div class="row">

            <!-- Diagram-Bar -->
            <div class="col-lg-7">
                <div class="card shadow">
                    <div class="card-header border-bottom">
                        <h4 class="card-title">Bar-Chart</h4>
                    </div>
                    <div class="card-body">
                        <canvas id="barChart2"></canvas>
                    </div>
                </div>
            </div>

            <!-- Pasien Umum, BPJS, Eksekutif -->
            <div class="col-lg-5">
                <div class="card shadow">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-6 col-md-12 col-sm-6">
                                <div class="card bg-facebook">
                                    <div class="stat-widget-two card-body">
                                        <div class="stat-content ">
                                            <div class="row">
                                                <div class="col-3">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="60" height="40" fill="currentColor" class="bi bi-clipboard2-pulse-fill text-light mb-2" viewBox="0 0 16 16">
                                                        <path d="M10 .5a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5.5.5 0 0 1-.5.5.5.5 0 0 0-.5.5V2a.5.5 0 0 0 .5.5h5A.5.5 0 0 0 11 2v-.5a.5.5 0 0 0-.5-.5.5.5 0 0 1-.5-.5Z"/>
                                                        <path d="M4.085 1H3.5A1.5 1.5 0 0 0 2 2.5v12A1.5 1.5 0 0 0 3.5 16h9a1.5 1.5 0 0 0 1.5-1.5v-12A1.5 1.5 0 0 0 12.5 1h-.585c.055.156.085.325.085.5V2a1.5 1.5 0 0 1-1.5 1.5h-5A1.5 1.5 0 0 1 4 2v-.5c0-.175.03-.344.085-.5ZM9.98 5.356 11.372 10h.128a.5.5 0 0 1 0 1H11a.5.5 0 0 1-.479-.356l-.94-3.135-1.092 5.096a.5.5 0 0 1-.968.039L6.383 8.85l-.936 1.873A.5.5 0 0 1 5 11h-.5a.5.5 0 0 1 0-1h.191l1.362-2.724a.5.5 0 0 1 .926.08l.94 3.135 1.092-5.096a.5.5 0 0 1 .968-.039Z"/>
                                                    </svg>
                                                </div>
                                                <div class="col-9 text-left">
                                                    <div class="stat-text text-white ml-2 mt-2">Umum</div>
                                                </div>
                                            </div>

                                            <!-- Tarik data tabel dari database -->
                                            <div class="stat-digit text-white">
                                                        <?php
                                                        if ($koneksi) {
                                                            $query = mysqli_query($koneksi, 'SELECT COUNT(pekerjaan) AS total_karyawan FROM pasien WHERE pekerjaan = "karyawan"');
                                                            $row = mysqli_fetch_assoc($query);
                                                            $totalKaryawan = $row['total_karyawan'];
                                                            echo "<p>$totalKaryawan</p>";
                                                        } else {
                                                            echo 'Not connected';
                                                        }
                                                        ?>
                                            </div>

                                        </div>
                                        <div class="progress">
                                            <div class="progress-bar progress-bar-warning w-85" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-12 col-sm-6">
                                <div class="card bg-success">
                                    <div class="stat-widget-two card-body">
                                        <div class="stat-content">
                                            <div class="row">
                                                <div class="col-3">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="60" height="40" fill="currentColor" class="bi bi-clipboard2-pulse-fill text-light mb-2" viewBox="0 0 16 16">
                                                        <path d="M10 .5a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5.5.5 0 0 1-.5.5.5.5 0 0 0-.5.5V2a.5.5 0 0 0 .5.5h5A.5.5 0 0 0 11 2v-.5a.5.5 0 0 0-.5-.5.5.5 0 0 1-.5-.5Z"/>
                                                        <path d="M4.085 1H3.5A1.5 1.5 0 0 0 2 2.5v12A1.5 1.5 0 0 0 3.5 16h9a1.5 1.5 0 0 0 1.5-1.5v-12A1.5 1.5 0 0 0 12.5 1h-.585c.055.156.085.325.085.5V2a1.5 1.5 0 0 1-1.5 1.5h-5A1.5 1.5 0 0 1 4 2v-.5c0-.175.03-.344.085-.5ZM9.98 5.356 11.372 10h.128a.5.5 0 0 1 0 1H11a.5.5 0 0 1-.479-.356l-.94-3.135-1.092 5.096a.5.5 0 0 1-.968.039L6.383 8.85l-.936 1.873A.5.5 0 0 1 5 11h-.5a.5.5 0 0 1 0-1h.191l1.362-2.724a.5.5 0 0 1 .926.08l.94 3.135 1.092-5.096a.5.5 0 0 1 .968-.039Z"/>
                                                    </svg>
                                                </div>
                                                <div class="col-9 text-left">
                                                    <div class="stat-text text-white ml-2 mt-2">BPJS</div>
                                                </div>
                                            </div>
                                            <div class="stat-digit text-white">

                                            <!-- Tarik data tabel dari database -->
                                            <?php
                                                    if ($koneksi) {
                                                        $query = mysqli_query($koneksi, 'SELECT COUNT(pekerjaan) AS total_karyawan FROM pasien WHERE pekerjaan = "karyawan" AND tgl_daftar BETWEEN "2021-03-01" AND "2021-04-30" ');
                                                        $row = mysqli_fetch_assoc($query);
                                                        $totalKaryawan = $row['total_karyawan'];
                                                        echo "<p>$totalKaryawan</p>";
                                                    } else {
                                                        echo 'Not connected';
                                                    }
                                                    ?>
                                            </div>

                                        </div>
                                        <div class="progress">
                                            <div class="progress-bar progress-bar-facebook w-75" role="progressbar" aria-valuenow="78" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-12 col-sm-6">
                                <div class="card bg-warning">
                                    <div class="stat-widget-two card-body">
                                        <div class="stat-content">
                                            <div class="row">
                                                <div class="col-3">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="60" height="40" fill="currentColor" class="bi bi-clipboard2-pulse-fill text-light mb-2" viewBox="0 0 16 16">
                                                        <path d="M10 .5a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5.5.5 0 0 1-.5.5.5.5 0 0 0-.5.5V2a.5.5 0 0 0 .5.5h5A.5.5 0 0 0 11 2v-.5a.5.5 0 0 0-.5-.5.5.5 0 0 1-.5-.5Z"/>
                                                        <path d="M4.085 1H3.5A1.5 1.5 0 0 0 2 2.5v12A1.5 1.5 0 0 0 3.5 16h9a1.5 1.5 0 0 0 1.5-1.5v-12A1.5 1.5 0 0 0 12.5 1h-.585c.055.156.085.325.085.5V2a1.5 1.5 0 0 1-1.5 1.5h-5A1.5 1.5 0 0 1 4 2v-.5c0-.175.03-.344.085-.5ZM9.98 5.356 11.372 10h.128a.5.5 0 0 1 0 1H11a.5.5 0 0 1-.479-.356l-.94-3.135-1.092 5.096a.5.5 0 0 1-.968.039L6.383 8.85l-.936 1.873A.5.5 0 0 1 5 11h-.5a.5.5 0 0 1 0-1h.191l1.362-2.724a.5.5 0 0 1 .926.08l.94 3.135 1.092-5.096a.5.5 0 0 1 .968-.039Z"/>
                                                    </svg>
                                                </div>
                                                <div class="col-9 text-left">
                                                    <div class="stat-text text-white ml-2 mt-2">Karyawan</div>
                                                </div>
                                            </div>

                                            <!-- Tarik data tabel dari database -->
                                            <div class="stat-digit text-white">
                                                        <?php
                                                        if ($koneksi) {
                                                            $query = mysqli_query($koneksi, 'SELECT COUNT(pekerjaan) AS total_karyawan FROM pasien WHERE pekerjaan = "karyawan"');
                                                            $row = mysqli_fetch_assoc($query);
                                                            $totalKaryawan = $row['total_karyawan'];
                                                            echo "<p>$totalKaryawan</p>";
                                                        } else {
                                                            echo 'Not connected';
                                                        }
                                                        ?>
                                            </div>

                                        </div>
                                        <div class="progress">
                                            <div class="progress-bar progress-bar-danger w-50" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-12 col-sm-6">
                                <div class="card bg-danger">
                                    <div class="stat-widget-two card-body">
                                        <div class="stat-content">
                                            <div class="row">
                                                <div class="col-3">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="60" height="40" fill="currentColor" class="bi bi-clipboard2-pulse-fill text-light mb-2" viewBox="0 0 16 16">
                                                        <path d="M10 .5a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5.5.5 0 0 1-.5.5.5.5 0 0 0-.5.5V2a.5.5 0 0 0 .5.5h5A.5.5 0 0 0 11 2v-.5a.5.5 0 0 0-.5-.5.5.5 0 0 1-.5-.5Z"/>
                                                        <path d="M4.085 1H3.5A1.5 1.5 0 0 0 2 2.5v12A1.5 1.5 0 0 0 3.5 16h9a1.5 1.5 0 0 0 1.5-1.5v-12A1.5 1.5 0 0 0 12.5 1h-.585c.055.156.085.325.085.5V2a1.5 1.5 0 0 1-1.5 1.5h-5A1.5 1.5 0 0 1 4 2v-.5c0-.175.03-.344.085-.5ZM9.98 5.356 11.372 10h.128a.5.5 0 0 1 0 1H11a.5.5 0 0 1-.479-.356l-.94-3.135-1.092 5.096a.5.5 0 0 1-.968.039L6.383 8.85l-.936 1.873A.5.5 0 0 1 5 11h-.5a.5.5 0 0 1 0-1h.191l1.362-2.724a.5.5 0 0 1 .926.08l.94 3.135 1.092-5.096a.5.5 0 0 1 .968-.039Z"/>
                                                    </svg>
                                                </div>
                                                <div class="col-9 text-left">
                                                    <div class="stat-text text-white ml-2 mt-2">Asuransi</div>
                                                </div>
                                            </div>

                                            <!-- Tarik data tabel dari database -->
                                            <div class="stat-digit text-white">
                                                        <?php
                                                        if ($koneksi) {
                                                            $query = mysqli_query($koneksi, 'SELECT COUNT(pekerjaan) AS total_karyawan FROM pasien WHERE pekerjaan = "karyawan"');
                                                            $row = mysqli_fetch_assoc($query);
                                                            $totalKaryawan = $row['total_karyawan'];
                                                            echo "<p>$totalKaryawan</p>";
                                                        } else {
                                                            echo 'Not connected';
                                                        }
                                                        ?>
                                            </div>

                                        </div>
                                        <div class="progress">
                                            <div class="progress-bar progress-bar-success w-25" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Diagram-Pie -->
        <div class="row">
            <div class="col-lg-4">
                <div class="card shadow">
                    <div class="card-header">
                        <h4 class="card-title">chart</h4>
                    </div>
                    <div class="card-body">
                        <canvas id="pieChart"></canvas> 
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card shadow">
                    <div class="card-header">
                        <h4 class="card-title">chart</h4>
                    </div>
                    <div class="card-body">
                        <canvas id="pieChart2"></canvas> 
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card shadow">
                    <div class="card-header">
                        <h4 class="card-title">chart</h4>
                    </div>
                    <div class="card-body">
                        <canvas id="lineChart"></canvas> 
                    </div>
                </div>
            </div>
        </div>
    </div>
        
    <div class="footer">
        <!-- <div class="copyright">
            <p>Copyright © Designed &amp; Developed by <a href="#" target="_blank">Quixkit</a> 2019</p>
            <p>Distributed by <a href="https://themewagon.com/" target="_blank">Themewagon</a></p> 
        </div> -->
    </div>

    <!-- include script -->
    <?php include 'include/script.php'; ?>
    <script>
            function startTime() {
            const today = new Date();
            let h = today.getHours();
            let m = today.getMinutes();
            let s = today.getSeconds();
            m = checkTime(m);
            s = checkTime(s);
            document.getElementById('txt').innerHTML =  h + ":" + m + ":" + s + " WIB";
            setTimeout(startTime, 1000);
            }

            function checkTime(i) {
            if (i < 10) {i = "0" + i};  // add zero in front of numbers < 10
            return i;
            }

            var tanggal = new Date();
            var date = tanggal.toDateString();
            document.getElementById("date").innerHTML = date;
        </script>

</body>

</html>