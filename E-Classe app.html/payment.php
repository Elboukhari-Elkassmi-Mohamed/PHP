<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./assets/bootstrap.min.css">
  <link rel="stylesheet" href="./assets/style.css">
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
    integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
  <title>Payment</title>


</head>

<body>
  <div class="d-flex " id="wrapper">
    <!-- Sidebar -->
    <?php include 'sidbar.php'; ?>
    <!-- /#sidebar-wrapper -->
    <!-- Main content -->
    <div class="container-fluid p-0  d-flex flex-column  position-sticky top-0">
      
    <?php  include 'navbar.php' ;?>

      <!-- ./col -->

      <div class="container h-100 " style="background-color: #E5E5E5;">

        <div class="header-one   py-2 d-flex justify-content-between">
          <h4>Student List</h4>
          <div class="font">
            <i class="far fa-sort"></i>
          </div>
        </div>

        <div class="table-responsive table-responsive-data2">
          <table class="table table-data2 ">
            <thead>
              <tr>
                <th>name</th>
                <th>Payment Schedule</th>
                <th>Bill Number</th>
                <th>Amount Paid</th>
                <th>Balance amount</th>
                <th>Date </th>
                <th class="invisible">sd</th>

              </tr>
            </thead>
            <tbody>

              <tr>
                <td>
                  <h6>karthi</h6>
                </td>
                <td>
                  <h6>First</h6>
                </td>
                <td>
                  <h6>00012223</h6>
                </td>
                <td>
                  <h6>DHS 100,000</h6>
                </td>
                <td>
                  <h6>DHS 500,000</h6>
                </td>
                <td>
                  <h6>05-Jan, 2022</h6>
                </td>
                <td class="font "> <i class="far fa-eye"></i></td>
              </tr>

              <tr style="background-color: #f8f8f8;">
                <td>
                  <h6>karthi</h6>
                </td>
                <td>
                  <h6>First</h6>
                </td>
                <td>
                  <h6>00012223</h6>
                </td>
                <td>
                  <h6>DHS 100,000</h6>
                </td>
                <td>
                  <h6>DHS 500,000</h6>
                </td>
                <td>
                  <h6>05-Jan, 2022</h6>
                </td>
                <td class="font "> <i class="far fa-eye"></i></td>
              </tr>
              <tr>
                <td>
                  <h6>karthi</h6>
                </td>
                <td>
                  <h6>First</h6>
                </td>
                <td>
                  <h6>00012223</h6>
                </td>
                <td>
                  <h6>DHS 100,000</h6>
                </td>
                <td>
                  <h6>DHS 500,000</h6>
                </td>
                <td>
                  <h6>05-Jan, 2022</h6>
                </td>
                <td class="font "> <i class="far fa-eye"></i></td>
              </tr>
              <tr style="background-color: #f8f8f8;">
                <td>
                  <h6>karthi</h6>
                </td>
                <td>
                  <h6>First</h6>
                </td>
                <td>
                  <h6>00012223</h6>
                </td>
                <td>
                  <h6>DHS 100,000</h6>
                </td>
                <td>
                  <h6>DHS 500,000</h6>
                </td>
                <td>
                  <h6>05-Jan, 2022</h6>
                </td>
                <td class="font "> <i class="far fa-eye"></i></td>
              </tr>
            </tbody>
          </table>
        </div>


      </div>
    </div>
  </div>

</body>

</html>