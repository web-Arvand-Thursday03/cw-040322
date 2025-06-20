<?php
include "includes/db.php";
include "includes/layout/header.php"


?>

<div class="container-fluid">
  <div class="row">
    <!-- Sidebar Section -->
    <?php include "includes/layout/sidebar.php" ?>
    <!-- Main Section -->
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="fs-3 fw-bold">داشبورد</h1>
      </div>

      <!-- Recently Posts -->
      <div class="mt-4">
        <h4 class="text-secondary fw-bold">مقالات اخیر</h4>
        <div class="table-responsive small">
          <table class="table table-hover align-middle">
            <thead>
              <tr>
                <th>id</th>
                <th>عنوان</th>
                <th>نویسنده</th>
                <th>عملیات</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th>1</th>
                <td>لورم ایپسوم متن ساختگی</td>
                <td>منصوری</td>
                <td>
                  <a href="#" class="btn btn-sm btn-outline-dark">ویرایش</a>
                  <a href="#" class="btn btn-sm btn-outline-danger">حذف</a>
                </td>
              </tr>
              <tr>
                <th>2</th>
                <td>لورم ایپسوم متن</td>
                <td>منصوری</td>
                <td>
                  <a href="#" class="btn btn-sm btn-outline-dark">ویرایش</a>
                  <a href="#" class="btn btn-sm btn-outline-danger">حذف</a>
                </td>
              </tr>
              <tr>
                <th>3</th>
                <td>لورم ایپسوم متن ساختگی</td>
                <td>منصوری</td>
                <td>
                  <a href="#" class="btn btn-sm btn-outline-dark">ویرایش</a>
                  <a href="#" class="btn btn-sm btn-outline-danger">حذف</a>
                </td>
              </tr>
              <tr>
                <th>4</th>
                <td>لورم ایپسوم</td>
                <td>منصوری</td>
                <td>
                  <a href="#" class="btn btn-sm btn-outline-dark">ویرایش</a>
                  <a href="#" class="btn btn-sm btn-outline-danger">حذف</a>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>

      <!-- Recently Comments -->
      <div class="mt-4">
        <h4 class="text-secondary fw-bold">کامنت های اخیر</h4>
        <div class="table-responsive small">
          <table class="table table-hover align-middle">
            <thead>
              <tr>
                <th>id</th>
                <th>نام</th>
                <th>متن کامنت</th>
                <th>عملیات</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th>1</th>
                <td>منصوری</td>
                <td>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.</td>
                <td>
                  <a href="#" class="btn btn-sm btn-outline-dark disabled">تایید شده</a>
                  <a href="#" class="btn btn-sm btn-outline-danger">حذف</a>
                </td>
              </tr>
              <tr>
                <th>2</th>
                <td>منصوری</td>
                <td>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.</td>
                <td>
                  <a href="#" class="btn btn-sm btn-outline-info">در انتظار تایید</a>
                  <a href="#" class="btn btn-sm btn-outline-danger">حذف</a>
                </td>
              </tr>
              <tr>
                <th>3</th>
                <td>منصوری</td>
                <td>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ</td>
                <td>
                  <a href="#" class="btn btn-sm btn-outline-dark disabled">تایید شده</a>
                  <a href="#" class="btn btn-sm btn-outline-danger">حذف</a>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>

      <!-- Categories -->
      <div class="mt-4">
        <h4 class="text-secondary fw-bold">دسته بندی</h4>
        <div class="table-responsive small">
          <table class="table table-hover align-middle">
            <thead>
              <tr>
                <th>id</th>
                <th>عنوان</th>
                <th>عملیات</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th>1</th>
                <td>برنامه نویسی</td>
                <td>
                  <a href="#" class="btn btn-sm btn-outline-dark">ویرایش</a>
                  <a href="#" class="btn btn-sm btn-outline-danger">حذف</a>
                </td>
              </tr>
              <tr>
                <th>2</th>
                <td>شبکه</td>
                <td>
                  <a href="#" class="btn btn-sm btn-outline-dark">ویرایش</a>
                  <a href="#" class="btn btn-sm btn-outline-danger">حذف</a>
                </td>
              </tr>
              <tr>
                <th>3</th>
                <td>متفرقه</td>
                <td>
                  <a href="#" class="btn btn-sm btn-outline-dark">ویرایش</a>
                  <a href="#" class="btn btn-sm btn-outline-danger">حذف</a>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </main>
  </div>
</div>
<?php include "includes/layout/footer.php" ?>