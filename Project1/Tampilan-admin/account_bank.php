<?php
include_once 'index/atas.php';
?>
<!-- Sidebar Menu -->
<nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="index.html" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>Dashboard</p>
            </a>
          </li>
          <li class="nav-item menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-folder-open"></i>
              <p>Tugas Praktikum</p>
              <i class="right fas fa-angle-left"></i>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-folder nav-icon"></i>
                  <p>Praktikum 1</p>
                  <i class="right fas fa-angle-left"></i>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="array_buah.php" class="nav-link">
                      <i class="far fa-file-code nav-icon"></i>
                      <p>Array Buah</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="array_fungsi.php" class="nav-link">
                      <i class="far fa-file-code nav-icon"></i>
                      <p>Array Fungsi</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="array_pop.php" class="nav-link">
                      <i class="far fa-file-code nav-icon"></i>
                      <p>Array pop</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="array_push.php" class="nav-link">
                      <i class="far fa-file-code nav-icon"></i>
                      <p>Array push</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="array_shift.php" class="nav-link">
                      <i class="far fa-file-code nav-icon"></i>
                      <p>Array Shift</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="array_siswa.php" class="nav-link">
                      <i class="far fa-file-code nav-icon"></i>
                      <p>Array Siswa</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="array_unshift.php" class="nav-link">
                      <i class="far fa-file-code nav-icon"></i>
                      <p>Array Unshift</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="variable_konstan.php" class="nav-link">
                      <i class="far fa-file-code nav-icon"></i>
                      <p>Variable Konstan</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="variable_system.php" class="nav-link">
                      <i class="far fa-file-code nav-icon"></i>
                      <p>Variable System</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="variable_user.php" class="nav-link">
                      <i class="far fa-file-code nav-icon"></i>
                      <p>Variable User</p>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-folder nav-icon"></i>
                  <p>Praktikum 2</p>
                  <i class="right fas fa-angle-left"></i>
                </a>
                <ul class="nav nav-treeview">
                  </li>
                  <li class="nav-item">
                    <a href="form_belanja.php" class="nav-link">
                      <i class="far fa-file-code nav-icon"></i>
                      <p>Form Belanja</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="form_nilai.php" class="nav-link">
                      <i class="far fa-file-code nav-icon"></i>
                      <p>Form Nilai</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="form_siswa.php" class="nav-link">
                      <i class="far fa-file-code nav-icon"></i>
                      <p>Form Siswa</p>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-folder nav-icon"></i>
                  <p>Praktikum 3</p>
                  <i class="right fas fa-angle-left"></i>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="atas.php" class="nav-link">
                      <i class="far fa-file-code nav-icon"></i>
                      <p>Atas</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="bawah.php" class="nav-link">
                      <i class="far fa-file-code nav-icon"></i>
                      <p>Bawah</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="tampilan.php" class="nav-link">
                      <i class="far fa-file-code nav-icon"></i>
                      <p>Tampilan</p>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-folder nav-icon"></i>
                  <p>Praktikum 4</p>
                  <i class="right fas fa-angle-left"></i>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="data_lingkaran.php" class="nav-link">
                      <i class="far fa-file-code nav-icon"></i>
                      <p>Data Lingkaran</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="data_mahasiswa.php" class="nav-link">
                      <i class="far fa-file-code nav-icon"></i>
                      <p>Data Mahasiswa</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="data_nilaimahasiswa.php" class="nav-link">
                      <i class="far fa-file-code nav-icon"></i>
                      <p>Data Nilai Mahasiswa</p>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="nav-item menu-open">
                <a href="#" class="nav-link active">
                  <i class="far fa-folder nav-icon"></i>
                  <p>Praktikum 5</p>
                  <i class="right fas fa-angle-left"></i>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="account_bank.php" class="nav-link active">
                      <i class="far fa-file-code nav-icon"></i>
                      <p>Account Bank</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="dispenser.php" class="nav-link">
                      <i class="far fa-file-code nav-icon"></i>
                      <p>Dispenser</p>
                    </a>
                  </li>
                </ul>
              </li>
            </ul>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Account Bank</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Account Bank</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="card">
        <div class="card-body row">
          <div class="col-12 d-flex">
            <div class="">
            <?php
                class Account {
                    public $nama;
                    protected $nomor;
                    private $saldo;
                    
                    function __construct($nama,$nomor, $saldo){
                        $this -> nama = $nama;
                        $this -> nomor = $nomor;
                        $this -> saldo = $saldo;
                    }
                    
                    public function deposit($uang){
                        $this -> saldo = $this-> saldo + $uang;
                    }

                    public function withdraw($uang){
                        $this -> saldo = $this -> saldo - $uang;
                    }

                    public function cetak(){
                        echo "</br>Nama : ".$this -> nama;
                        echo "</br>No Account : ".$this -> nomor;
                        echo "</br>Saldo : ".$this -> saldo;
                        echo "</br>";
                    }
                }

                $cs1 = new Account ('Ahmad','C001', 6000000);
                $cs1 -> deposit(1000000);
                $cs1 -> cetak(); 
                echo "Ahmad Menabung Uang Sebesar Rp 1.000.000";

                echo "</br>";
                $cs2 = new Account ('Budi', 'C002', 5350000);
                $cs2 -> withdraw(2500000);
                $cs2 -> cetak();
                echo "Budi Menarik Uang Sebesar Rp. 2.500.000";

                echo "</br>";
                $cs3 = new Account ('Kurniawan', 'C003',2500000);
                $cs3 -> cetak();
            ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
    <div class="p-3">
      <h5>Title</h5>
      <p>Sidebar content</p>
    </div>
  </aside>
  <!-- /.control-sidebar -->
<?php
require_once 'index/bawah.php';
?>