<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Task Board</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <!--Navigation menu-->
    <nav class="navbar navbar-default">
      <div class="container-fluid">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="#">Доска задач</a>

        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <form class="navbar-form navbar-right" action="" method="post">
            <div class="form-group">
              <span class="navbar-user_name">Здравствуйте, User_name!</span>
            </div>
            <button type="submit" class="btn btn-success" name="button_exit">Выйти</button>
          </form>
        </div><!--navbar-collapse-->
      </div><!--container-fluid-->
    </nav>

    <div class="container">
      <div class="row">
        <!--New Project-->
        <div class="col-md-12">
          <div class="create_new_project">
            <form id="create_prj" class="form_style" action="" method="post">
              <div class="form_group">
                <label for="new_project_name"><h3>Создать новый проект?</h3></label>
                <input class="form-control" type="text" name="new_project_name" placeholder="Введите имя нового проекта:" value=""><br>
                <button type="button" class="btn btn-success" id="cr_prj_btn" name="cr_prj_btn">
                  Сохранить
                </button>
                <span class="create_new_project-status"></span>
              </div><!--form_group-->
            </form>
          </div><!--create_new_project-->
        </div><!--col-md-12-->
      </div><!--row-->
      <div class="row">
        <!--Task List-->
        <div class="col-md-8">
          <div class="taskboard">
            <form id="tasklist" class="form_style" action="" method="post">
              <div class="form_group">
                <div class="taskboard-chose_project_title">
                  <h3>Выберите проект:</h3>
                </div>
                <select class="form-control project_name">
                  <option>MainTask</option>
                </select>
              </div><!--form_group-->
              <div class="form-group">
                <h3>Список задач:</h3>
                <table class="table table-striped">
                  <tr>
                    <td>
                      <input class="" type="checkbox" name="task1" value="">
                    </td>
                    <td>
                      <label for="task1">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. </label>
                    </td>
                    <td>
                      <button type="button" class="btn btn-danger glyphicon glyphicon-remove" name="button"></button>
                    </td>
                    <td>
                      <button type="button" class="btn btn-success glyphicon glyphicon-pencil" name="button"></button>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <input class="" type="checkbox" name="task3" value="">
                    </td>
                    <td>
                      <label for="task3">Поставить чайник</label>
                    </td>
                    <td>
                      <button type="button" class="btn btn-danger glyphicon glyphicon-remove" name="button"></button>
                    </td>
                    <td>
                      <button type="button" class="btn btn-success glyphicon glyphicon-pencil" name="button"></button>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <input class="" type="checkbox" name="task2" value="">
                    </td>
                    <td>
                      <label for="task2">Зажечь огонь</label>
                    </td>
                    <td>
                      <button type="button" class="btn btn-danger glyphicon glyphicon-remove" name="button"></button>
                    </td>
                    <td>
                      <button type="button" class="btn btn-success glyphicon glyphicon-pencil" name="button"></button>
                    </td>
                  </tr>
                </table>
              </div><!--form_group-->
            </form>
          </div><!--taskboard-->
        </div><!--col-md-8-->

        <!--New Task-->
        <div class="col-md-4">
          <div class="new_task">
            <form id="new_task" class="form_style" action="" method="post">
              <div class="taskboard-new_task_title">
                <h3>Добавить новую задачу:</h3>
              </div>
              <div class="form-group">
                <p>
                  <label>
                    <input class="form-control" type="text" name="new_task" placeholder="Название задачи:" required>
                  </label>
                </p>
                <p>
                  <label>
                    <input class="form-control" type="date" name="new_task_date" required>
                  </label>
                </p>
                <p>
                  <label>
                    <input type="checkbox" name="new_task_remind">
                    Напомнить?
                  </label>
                </p>
                <p>
                  <select class="form-control priority">
                    <option>Высокий приоритет</option>
                    <option>Обычный приоритет</option>
                    <option>Низкий приоритет</option>
                  </select>
                </p>
                <p>
                  <select class="form-control project_name">
                    <option>MainTask</option>
                  </select>
                </p>
                <p>
                  <button type="button" id="create_task" class="btn btn-success" name="create_task">Создать задачу</button>
                </p>
              </div><!--form_group-->
            </form>
          </div><!--new_task-->
        </div><!--col-md-4-->
      </div><!--row-->
    </div><!--Container-->
    <!--Footer-->
    <footer class="col-md-12 footer">
      <p class="footer-copy">
        "Личный стратегический план работы - важнейшее условие достижения поставленной цели."
        <span class="footer__copy-author">- Брайан Трейси</span>
      </p>
      <p class="footer-copy">
        Designed &amp; produced by Kasatkin Sergey
      </p>
      <p class="footer-copy">
        All rights reversed &copy; 2017
      </p>
    </footer>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/todolist.js"></script>
  </body>
</html>
