<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Scope</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.1/css/bootstrap.min.css"
      integrity="sha384-VCmXjywReHh4PwowAiWNagnWcLhlEJLA5buUprzK8rxFgeH0kww/aWY76TfkUoSX" crossorigin="anonymous">
    <link rel="stylesheet" href="stylesheet.css">
    <link rel="icon" href="K-Logo.png" type="image/png" sizes="48x48">
</head>

<body>
<div class="container">

  <header class="header">
    <h1 id="title" class="text-center">Create your own Scope!</h1>
    <p id="undertitle" class="text-center">
    The scope is simply all the work that needs to be done in order to achieve a project's objectives.<br>
    <p id="description" class="text-center">
    In other words, the scope involves the process of identifying and documenting specific project goals, outcomes, milestones, tasks, costs,
    and timeline dates specific to the project objectives. Scope involves getting information required to start a project, and the features the product would have that would meet
    its stakeholders requirements.
    </p>
    </p>
    <hr style="height:1px;border-width:0;color:#000000;background-color:#000000">
  </header>

  <form action="makescope.php" method="POST" id="survey-form">
    <div class="form-group">
      <p>What is the name of the product?</p>
      <textarea id="comments" class="input-textarea" name="answer1">My products name is </textarea>
    </div>
    <div class="form-group">
      <p>Who is the target group of the product?</p>
      <textarea id="comments" class="input-textarea" name="answer2">The target group of the product is </textarea>
    </div>
    <div class="form-group">
      <p>What is the purpose of the final product for your target group?</p>
      <textarea id="comments" class="input-textarea" name="answer3">The final purpose of the product is to create </textarea>
    </div>
    <div class="form-group">
      <p>What are the components of the product?</p>
      <textarea id="comments" class="input-textarea" name="answer4">The project consists of the following key components: </textarea>
    </div>
    <div class="form-group">
      <p>Where do the diffenent components come from?</p>
      <textarea id="comments" class="input-textarea" name="answer51">The key components come from the following rescources: </textarea>
    </div>
    <div class="form-group">
      <p>How will the look and the feel of the final product be presented on the market?</p>
      <textarea id="comments" class="input-textarea" name="answer6">The final product will be presented </textarea>
    </div>
    <div class="form-group">
      <p>What are the quality criteria of the final product?</p>
      <textarea id="comments" class="input-textarea" name="answer7">The final product will have the following quality criteria: </textarea>
    </div>
    <div class="form-group">
      <p>What is the minimum quality criteria of the final product?</p>
      <textarea id="comments" class="input-textarea" name="answer8">The final product will have the following minimum quality criteria: </textarea>
    </div>   
    <div class="form-group">
      <p>What is the maximum quality criteria of the final product?</p>
      <textarea id="comments" class="input-textarea" name="answer9">The final product will have the following maximum quality criteria: </textarea>
    </div>
    <div class="form-group">
      <p>How will the final product be tested?</p>
      <textarea id="comments" class="input-textarea" name="answer10" >To test the quality of the final product </textarea>
    </div>
    <div class="form-group">
      <button type="submit" id="submit" class="submit-button">
        Create my scope
      </button>
    </div>
  </form>
</div>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
  integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
  integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.1/js/bootstrap.min.js"
  integrity="sha384-XEerZL0cuoUbHE4nZReLT7nx9gQrQreJekYhJD9WNWhH8nEW+0c5qq7aIo2Wl30J" crossorigin="anonymous"></script>
</body>
</html>