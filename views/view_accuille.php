

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.98.0">
    <title>Dashboard</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/dashboard/">
     <link rel="stylesheet" href="../ASSETS/CSS/bootstrap-icons.css">   
<link href="../ASSETS/CSS/bootstrap.min.css" rel="stylesheet">
<link href="../ASSETS/CSS/dash.css" rel="stylesheet">
<link href="../ASSETS/CSS/dashboard.css" rel="stylesheet">

  
  </head>
  <body>
    
<header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
  <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3 fs-6" href="#">Clinique Internationale IMEN</a>
  <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <input class="form-control form-control-dark w-100 rounded-0 border-0" type="text" placeholder="Search" aria-label="Search">
  <div class="navbar-nav">
    <div class="nav-item text-nowrap">
      <a class="nav-link px-3" href="../controller/controller_logout.php">Sign out</a>
    </div>
  </div>
</header>

<div class="container-fluid">
  <div class="row">
    <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
      <div class="position-sticky pt-3">
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">
              <span data-feather="home" class="align-text-bottom"></span>
              Dashboard
            </a>
          </li>
          
          
        
          <li class="nav-item">
            <a class="nav-link" href="../controller/controller_extinPerime.php">
              <span data-feather="layers" class="align-text-bottom"></span>
              Extincteur perime <span class="px-3"> <?php if (isset($nbrPerime)) {
               echo $nbrPerime;
              } ?> </span>
            </a>
          </li>
        </ul> 


          
         
        </ul> -->
      </div>
    </nav>



    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Dashboard</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
        

           <div class="   text-center align-items-center justify-content-center">
        <button type="button" class="btn btn-sm btn-outline-secondary" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo">Ajouter Extincteur</button>
                

      

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Nouveau extincteur</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>

      <form  action="../controller/controller_add.php" method="POST"  >
      <div class="modal-body">
        

          <div class="mb-3">
            <label for="recipient-name" class="col-form-label">مكان التواجد </label>
            <input type="text" required name="place" class="form-control" id="recipient-name">
          </div>
          <div class="mb-3">
            <label for="recipient-name" class="col-form-label">النوع</label>
            <input type="text" required name="type" class="form-control" id="recipient-name">
          </div>  
          <div class="mb-3">
            <label for="recipient-name" class="col-form-label">حجم</label>
            <input type="text" required name="volume" class="form-control" id="recipient-name">
          </div>  
          <div class="mb-3">
            <label for="recipient-name" class="col-form-label">المكان بالضبط</label>
            <input type="text" required name="Exact_location" class="form-control" id="recipient-name">
          </div>  
      
          <div class="mb-3">
            <label for="recipient-name" class="col-form-label">تاريخ التعبئة </label>
            <input type="date" required name="date_d" class="form-control" id="recipient-name">
          </div>  
          <div class="mb-3">
            <label for="recipient-name" class="col-form-label">تاريخ انتهاء الصلاحية</label>
            <input type="date" required name="date_p" class="form-control" id="recipient-name">
          </div> 
          
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
        <button type="submit" class="btn btn-primary">Enregistrer</button>
      </div>
      </form>
    </div>
  </div>
</div ><!--ajouter nouveau  -->
        </div>





         
        </div>
      </div>

     

      <h2 class="py-3">Table des extincteurs </h2>
      <div class="table-responsive">
      <table class="table table-striped table-sm">
          <thead>
            <tr>
            <th scope="col"></th>
            <th scope="col">Action</th>
            <th scope="col">Jour rester</th>
            <th scope="col">date de péremption </th>
            <th scope="col">date de debut</th>
            <th scope="col">place exactement</th>
            <th scope="col">volume</th>
            <th scope="col">type </th>
            <th scope="col">place</th>
            <th scope="col ">id</th>
              
              
              
             
              
            
            </tr>
          </thead>
          <tbody>

      <?php 
  
   

while($resultat11 = $extine->fetch()){


 


 



          

            }
           

            $jour=$extincteur->resJour($resultat11['date_p']);


             
                 
            echo ' <tr> ' ;  
            
            
            echo ' <td > <div >
            <button type="button" class="btn btn-sm btn-outline-secondary" data-bs-toggle="modal" data-bs-target="#exampleModal'.$resultat11['id'].'" data-bs-whatever="@mdo">Update</button>
                    
    
          
    
    <div class="modal fade" id="exampleModal'.$resultat11['id'].'" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Nouveau extincteur</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <form  action="../controller/controller_extinPerime.php" method="POST"  >
          <div class="modal-body">
            
    
              <div class="mb-3">
                <label for="recipient-name" class="col-form-label">مكان التواجد </label>
                <input type="hidden" name="id" value="'.$resultat11['id'].'"/>
                <input type="text" required value="'.$resultat11['place'].'" name="place" class="form-control" id="recipient-name">
              </div>
              <div class="mb-3">
                <label for="recipient-name" class="col-form-label">النوع</label>
                <input type="text" value="'.$resultat11['typeE'].'" required name="type" class="form-control" id="recipient-name">
              </div>  
              <div class="mb-3">
                <label for="recipient-name" class="col-form-label">حجم</label>
                <input type="text" value="'.$resultat11['vol'].'" required name="volume" class="form-control" id="recipient-name">
              </div>  
              <div class="mb-3">
                <label for="recipient-name" class="col-form-label">المكان بالضبط</label>
                <input type="text" value="'.$resultat11['placeEx'].'" required name="Exact_location" class="form-control" id="recipient-name">
              </div>  
          
              <div class="mb-3">
                <label for="recipient-name" class="col-form-label">تاريخ التعبئة </label>
                <input type="date" required value="'.$resultat11['date_d'].'" name="date_d" class="form-control" id="recipient-name">
              </div>  
              <div class="mb-3">
                <label for="recipient-name" class="col-form-label">تاريخ انتهاء الصلاحية</label>
                <input type="date" required value="'.$resultat11['date_p'].'" name="date_p" class="form-control" id="recipient-name">
              </div> 
              
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
            <button type="submit" class="btn btn-primary">Modifier</button>
          </div>
          </form>
        </div>
      </div>
    </div> </td>' ; 


            echo'<td >    

            <form  action="../controller/controller_page_acc.php?id='. $resultat11['id'].'" method="POST"  >
            <!-- Button trigger modal -->
            <button type="submit" class="btn btn-sm btn-outline-secondary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
              Supprimer
            </button>
            
        
             </form>





            

          </td>' ; 

         
          
           
           
            echo'<td>'.$jour.'</td>' ;          
            echo'<td>'.$resultat11['date_p'].'</td>' ;
            echo'  <td>'.$resultat11['date_d'].'</td>';
            echo' <td>'.$resultat11['placeEx'].'</td>' ;
            echo'<td>'.$resultat11['vol'].'</td>';
            echo'<td>'.$resultat11['typeE'].'</td>';
            echo'<td>'.$resultat11['place'].'</td>';
            echo ' <td>'.$resultat11['id'].'</td>';  
            echo' </tr>';
            
        
              ?>
          </tbody>
        </table>

       


      </div>
    </main>
  </div>
</div>


    <script src="../ASSETS/JS/bootstrap.bundle.min.js"></script>

      <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js" integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha" crossorigin="anonymous"> 
       </script><script src="../ASSETS/JS/datePiker.js"></script>   
      </script>
      <script src="../ASSETS/JS/dashboard.js"></script>
  </body>
</html>
