<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>

    <!-- Bootstrap CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <!-- Font Awsome CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="icon" type="image/x-icon" href="https://www.pstu.ac.bd/images/settings/pstulogo.png">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/admin.css">
</head>
<body>

<section class="dashboard">
    <aside id="sidebar">
        <div class="h-100">
           <div class="logo">
                <a href="#">CRUD</a>
           </div>

           <ul class="sidebar-nav">
              <li class="sidebar-item">
                    <a href="#" class="sidebar-link collapsed" data-bs-target="#article" data-bs-toggle="collapse" aria-expanded="false" >
                        <i class="fa-solid fa-file-lines pe-2"></i>
                        Articles
                    </a>
                    <ul id="article" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
                        <li class="sidebar-item">
                            <a href="create.php" class="sidebar-link">Add Article</a>
                            <a href="index.php" class="sidebar-link">All Articles</a>
                        </li>
                    </ul>
              </li>
           </ul>
        </div>
    </aside>

    <div class="main">
    <nav class="navbar">
        <button class="btn" type="button" id="sidebar-toggle">
        <span class="navbar-toggler-icon"></span>
        </button>
    </nav>
    <main>
       <section class="main-content">
            <form action="backend/insert.php" method="POST">
                <div class="form-field">
                    <input type="text" name="title" placeholder="Title of the Article" class="form-control mb-3">
                </div>
                <div class="form-field mb-2">
                    <textarea name="description" placeholder="your article" cols="30" rows="10" class="form-control"></textarea>
                </div>

                <div class="form-field">
                    <input type="submit" value="Add Article" class="btn btn-primary" name="create">
                </div>
            </form>
       </section>
  </main>
</div>
</section>


<!-- Bootstrap JS CDN -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
<script src="../js/main.js"></script>
</body>
</html>