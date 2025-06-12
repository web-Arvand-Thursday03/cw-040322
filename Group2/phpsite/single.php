<?php
include "includes/db.php";
include "includes/layout/header.php";

if (isset($_GET['id'])) {
  $postId = $_GET['id'];

  $stmt = $connection->query("SELECT posts.*,categories.title AS category_title 
                            FROM posts,categories 
                            WHERE posts.category_id=categories.id AND posts.id=$postId");
  $post = $stmt->fetch();
  // var_dump($post);
}

?>
<main>
  <!-- Content -->
  <section class="mt-4">
    <div class="row">
      <!-- Posts & Comments Content -->
      <div class="col-lg-8">
        <div class="row justify-content-center">
          <!-- Post Section -->
          <?php if (empty($post)): ?>
            <div class="alert alert-danger">مقاله مورد نظر پیدا نشد !!!!</div>
          <?php else: ?>
            <div class="col">
              <div class="card">
                <img src="./assets/images/<?= $post['image'] ?>" class="card-img-top" alt="post-image" />
                <div class="card-body">
                  <div class="d-flex justify-content-between">
                    <h5 class="card-title fw-bold"><?= $post['title'] ?></h5>
                    <div>
                      <span class="badge text-bg-secondary"><?= $post['category_title'] ?></span>
                    </div>
                  </div>
                  <p class="card-text text-secondary text-justify pt-3">
                    <?= $post['body'] ?>
                  </p>
                  <div>
                    <p class="fs-6 mt-5 mb-0">نویسنده : <?= $post['author'] ?></p>
                  </div>
                </div>
              </div>
            </div>

            <hr class="mt-4" />

            <!-- Comment Section -->
            <div class="col">
              <!-- Comment Form -->
              <div class="card">
                <div class="card-body">
                  <p class="fw-bold fs-5">ارسال کامنت</p>

                  <form>
                    <div class="mb-3">
                      <label class="form-label">نام</label>
                      <input type="text" class="form-control" />
                    </div>
                    <div class="mb-3">
                      <label class="form-label">متن کامنت</label>
                      <textarea class="form-control" rows="3"></textarea>
                    </div>
                    <button type="submit" class="btn btn-dark">ارسال</button>
                  </form>
                </div>
              </div>

              <hr class="mt-4" />
              <!-- Comment Content -->
              <p class="fw-bold fs-6">تعداد کامنت : 3</p>

              <div class="card bg-light-subtle mb-3">
                <div class="card-body">
                  <div class="d-flex align-items-center">
                    <img src="./assets/images/profile.png" width="45" height="45" alt="user-profle" />

                    <h5 class="card-title me-2 mb-0">محمد صالحی</h5>
                  </div>

                  <p class="card-text pt-3 pr-3">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.</p>
                </div>
              </div>

              <div class="card bg-light-subtle mb-3">
                <div class="card-body">
                  <div class="d-flex align-items-center">
                    <img src="./assets/images/profile.png" width="45" height="45" alt="user-profle" />

                    <h5 class="card-title me-2 mb-0">متین سیدی</h5>
                  </div>

                  <p class="card-text pt-3 pr-3">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ</p>
                </div>
              </div>

              <div class="card bg-light-subtle mb-3">
                <div class="card-body">
                  <div class="d-flex align-items-center">
                    <img src="./assets/images/profile.png" width="45" height="45" alt="user-profle" />

                    <h5 class="card-title me-2 mb-0">زهرا عزیزی</h5>
                  </div>

                  <p class="card-text pt-3 pr-3">لورم ایپسوم متن ساختگی با تولید سادگی</p>
                </div>
              </div>
            </div>
          <?php endif ?>
        </div>
      </div>
      <!-- Sidebar Section -->
      <?php include "includes/layout/sidebar.php"; ?>
    </div>
  </section>
</main>

<!-- Footer -->
<?php include "includes/layout/footer.php"; ?>