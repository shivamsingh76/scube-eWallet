<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <title>Dashboard</title>
    <link
      rel="stylesheet prefetch"
      href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css"
    />
    <link
      rel="stylesheet prefetch"
      href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css"
    />
    <link
      rel="stylesheet prefetch"
      href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css"
    />
    <style class="cp-pen-styles">
      @import url("https://fonts.googleapis.com/css?family=Open+Sans:300,400,400i,600,700&subset=latin-ext");
    </style>
    <link
      href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css"
      rel="stylesheet"
      id="bootstrap-css"
    />
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
      integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh"
      crossorigin="anonymous"
    />
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <link rel="stylesheet" href="css/dash.css" />
    <!------ Include the above in your HEAD tag ---------->
  </head>

  <body class="sidebar-is-reduced">
    <header class="l-header">
      <div class="l-header__inner clearfix">
        <div class="c-header-icon js-hamburger">
          <div class="hamburger-toggle">
            <span class="bar-top"></span><span class="bar-mid"></span
            ><span class="bar-bot"></span>
          </div>
        </div>
        <div class="c-header-icon has-dropdown">
          <a class="c-badge c-badge--header-icon animated shake">
            No Notifications
          </a>
          <i class="fa fa-bell"></i>
        </div>
        <div class="header-icons-group">
          <div
            class="c-header-icon logout"
            onclick="location.href ='login_simple.html'"
          >
            <i class="fa fa-power-off"> </i>
          </div>
        </div>
      </div>
    </header>
    <div class="l-sidebar">
      <div class="logo">
        <div class="logo__txt">Scube</div>
      </div>
      <div class="l-sidebar__content">
        <nav class="c-menu js-menu">
          <ul class="u-list">
            <li
              class="c-menu__item is-active"
              data-toggle="tooltip"
              title="Dashboard"
            >
              <div class="c-menu__item__inner">
                <i class="fa fa-file-text-o"></i>
                <div class="c-menu-item__title">
                  <a href="#balance">Dashboard</a>
                </div>
              </div>
            </li>
            <li
              class="c-menu__item has-submenu"
              data-toggle="tooltip"
              title="Transactions"
            >
              <div class="c-menu__item__inner">
                <i class="fa fa-history"></i>
                <div class="c-menu-item__title">
                  <a href="#prevTransaction">Transactions</a>
                </div>
              </div>
            </li>
            <li
              class="c-menu__item has-submenu"
              data-toggle="tooltip"
              title="Transfer"
            >
              <div class="c-menu__item__inner">
                <i class="fa fa-address-book-o"></i>
                <div class="c-menu-item__title"><a href="#transfer">Transfer</a></div>
              </div>
            </li>
          </ul>
        </nav>
      </div>
    </div>
    <main class="l-main">
      <div class="content-wrapper content-wrapper--with-bg">
        <div class="card" style="width: auto; height: 200px;" id="balance">
          <!-- Balance card -->
          <div class="card-body">
            <h1
              class="card-title"
              style="font-size: xx-large; font-weight: bold;"
            >
              Welcome
            </h1>
            <br />
            <h2 class="card-subtitle mb-2 text-muted">
              Hi! 
            </h2>
            <p class="card-text">
              Get 5% off on your first transaction
            </p>
            <br />
            <a href="#AddMoney" class="card-link">Add Money</a>
            <a href="#prevTransaction" class="card-link"
              >Previous Transactions</a
            >
          </div>
        </div>
        <br / id="AddMoney">
        <hr />
        <!--Add money -->
        <div class="card text-center">
          <div
            class="card-header"
            style="font-size: xx-large; font-weight: bold;"
          >
            Add Money
          </div>
          <div class="card-body">
            <p class="card-text">
              Click the option below to add money
            </p>
            <!-- Button trigger modal -->
            <button
              type="button"
              class="btn btn-primary"
              data-toggle="modal"
              data-target="#exampleModal"
            >
              Add Money
            </button>

            <!-- Modal -->
            <div
              class="modal fade"
              id="exampleModal"
              tabindex="-1"
              role="dialog"
              aria-labelledby="exampleModalLabel"
              aria-hidden="true"
            >
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h1 class="modal-title" id="exampleModalLabel">
                      Add Money
                    </h1>
                    <button
                      type="button"
                      class="close"
                      data-dismiss="modal"
                      aria-label="Close"
                    >
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    <form action="addmoney.php" method="POST">
                      <div class="form-row" style="font-size: large;">
			    
			                       <div class="col">
                          <input
                            type="text"
                            class="form-control"
                            placeholder="Username"
			    name="username"
			    id="username"
				required
                          />
                        </div>

		                        <div class="col">
                          <input
                            type="password"
                            class="form-control"
                            placeholder="Bank Acc Details"
			    name="bank_acc"
			    id="bank_acc"
				required
                          />
                        </div>
                      </div>
   <button type="submit" class="btn btn-primary">
                      Verify Details
                    </button>
                    </form>
                  </div>
                  <div class="modal-footer">
                    <button
                      type="button"
                      class="btn btn-secondary"
                      data-dismiss="modal"
                    >
                      Close
                    </button>
                 
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="card-footer text-muted">
            Peace
          </div>
        </div>
        
        <br />
        <hr />
               <div class="card text-center">
          <h1
            class="card-header"
            style="font-size: xx-large; font-weight: bold;"
          >
            Money Transfer
          </h1>
          <div class="card-body">
            <h3 class="card-title">Fill out the form below to transfer</h3>
            <form action="transfer.php" method="post">
              <div class="form-group text-center">
                <label for="exampleInputEmail1">User txn ID</label>
                <input
                  type="text"
                  class="form-control form-control-lg"
                  id="recUid"
                  aria-describedby="usernameHelp"
                  placeholder="User ID"
		name="txn_id"
                />
              </div>
              <div class="form-group">
                <label for="inputAmount">Amount in Rs.</label>
                <input
                  type="text"
                  class="form-control form-control-lg"
                  id="amount"
                  aria-describedby="amountHelp"
                  placeholder="Amount"
		  name="amount";
                />
              </div>
              <div class="form-group">
                <label for="exampleInputPassword1">Sent to</label>
                <input
                  type="text"
                  class="form-control form-control-lg"
                  id="exampleInputPassword1"
                  placeholder="Sent to"
		 name="sent_to"
		  id="sent_to"
                />
              </div>

		<div class="form-group">
                <label for="exampleInputPassword1">From User</label>
                <input
                  type="text"
                  class="form-control form-control-lg"
                  id="exampleInputPassword1"
                  placeholder="From"
		 name="received_from"
		  id="received_from"
                />
              </div>
              <button type="submit" class="btn btn-dark">Transfer</button>
            </form>
          </div>
        </div>
      </div>
    </main>
  </body>
  <footer>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://use.fontawesome.com/2188c74ac9.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="dash.js"></script>
    <script
      src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
      integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
      integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
      integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
      crossorigin="anonymous"
    ></script>
  </footer>
</html>




