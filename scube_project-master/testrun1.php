<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Enter Details</title>
    <script
      src="https://kit.fontawesome.com/5253403af6.js"
      crossorigin="anonymous"
    ></script>
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
      integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="css/signup.css" />
    <link
      href="https://fonts.googleapis.com/css?family=Montserrat:300,400,900|Ubuntu&display=swap"
      rel="stylesheet"
    />
  </head>
  <body>
    <div class="container">
<br />
<br />
<br />
<form class="form-signin" id="add" action="addmoney1.php" method="post">
                
                <div class="form-label-group">
                  <input
                    type="text"
                    id="inputUserid"
                    class="form-control"
                    placeholder="User ID"
		    name="add_id"
                    required
                    autofocus
                  />
                  <label for="inputUserid">User ID</label>
                </div>

                <div class="form-label-group">
                  <input
                    type="text"
                    id="inputUserame"
                    class="form-control"
                    placeholder="Username"
		    name="username"
                    required
                    autofocus
                  />
                  <label for="inputUserame">Username</label>
                </div>

                <div class="form-label-group">
                  <input
                    type="text"
                    id="bank_acc"
                    class="form-control"
                    placeholder="Bank Account Details"
		    name="bank_acc"
                    required
                  />
                  <label for="bank_acc">Bank Account Details</label>
                </div>

                <div class="form-label-group">
                  <input
                    type="text"
                    id="amount"
                    class="form-control"
                    placeholder="Amount"
		    name="amount"
                    required
                  />
                  <label for="amount">Amount</label>
                </div>

                
                <button
                  class="btn btn-lg btn-dark btn-block text-uppercase"
                  type="submit" name="add"
                >
                  Add and Save Details
                </button>
                <hr class="my-8" />
              </form>
              <a href="dash.php">
                <button class="btn btn-lg btn-google btn-block text-uppercase">
                  <i class="fas fa-sign-in-alt"></i> Return To Dash
                </button>
              </a>
              <br />
              
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
  <footer>
    <script
        src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
        crossorigin="anonymous"
      ></script>
      <script
        src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
        crossorigin="anonymous"
      ></script>
      <script
        src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"
      ></script>
      <p>© Copyright 2020 Scube</p>
  </footer>
</html>
