
<!DOCTYPE HTML5>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>DestinyVS</title>

    <!-- Bootstrap -->
    <link href="bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- SCSS Styles -->
    <link href="css/styles.css" rel="stylesheet">

  </head>
  <body id="particles">
      <header>

      </header>

      <div class="form-container" id="overlay">
        
        <div class="col-md-5 left-container">
          
          <form>
            <div class="form-group left-corner corner-container">
              <input type="text" class="form-control" id="playerA" name="playerA" tabindex="1" placeholder="Player A" value="SNIPEOUTdaLIGHTS">
            </div>
            <div class="form-group selector-container">
              <select name="playerAPlatform" id="playerA-selector" class="form-control">
                <option value="">--Choose your Platform--</option>
                <option value="2">PlayStation Network</option>
                <option value="1">Xbox Live</option>
              </select>
            </div>
          </form>
          
          <div class="profile-characters profileA">
            <!--<div class="character col-md-12" id="profile-a-1">
              <img src="images/test.png"><span class="char-class">Hunter</span><span class="char-light-level"><img class="light-icon" src="images/light.png"><span class="char-light-level-text">286</span></span>
            </div>
            <div class="character col-md-12" id="profile-a-2">
              <img src="images/test.png"><span class="char-class">Titan</span><span class="char-light-level"><img class="light-icon" src="images/light.png"><span class="char-light-level-text">234</span></span>
            </div>
            <div class="character col-md-12" id="profile-a-3">
              <img src="images/test.png"><span class="char-class">Warlock</span><span class="char-light-level"><img class="light-icon" src="images/light.png"><span class="char-light-level-text">298</span></span>
            </div>-->

            <div id="charWrapper">
            
            </div>

            <div class="help-text col-md-12">
              <img src="images/info.png"><span class="stat-lg-text">Please select a character to compare</span>
            </div>

            <div class="character-stats profileA-stats col-mad-12">
              <div class="stat-cat col-md-12">
                <div class="stat-wrapper margin-top-remover margin-left-remover margin-right-remover">
                  Overall
                </div>
              </div>
              <div class="stat-cat col-md-4">
                <div class="stat-wrapper margin-top-remover margin-left-remover">
                  Story
                </div>
              </div>
              <div class="stat-cat col-md-4">
                <div class="stat-wrapper margin-top-remover">
                  Strike
                </div>
              </div>
              <div class="stat-cat col-md-4">
                <div class="stat-wrapper margin-top-remover margin-right-remover">
                  Patrol
                </div>
              </div>
              <div class="stat-cat col-md-4">
                <div class="stat-wrapper margin-top-remover margin-left-remover">
                  Raid
                </div>
              </div>
              <div class="stat-cat col-md-4">
                <div class="stat-wrapper margin-top-remover">
                  POE
                </div>
              </div>
              <div class="stat-cat col-md-4">
                <div class="stat-wrapper margin-top-remover margin-right-remover">
                  Crucible
                </div>
              </div>

              <div class="stat-cat col-md-6">
                <div class="stat-wrapper lg-stat margin-top margin-left-remover">
                  <span class="stat-label">Kill/Death</span>
                  <div class="stat-lg-text">37.95</div>
                </div>
              </div>
              <div class="stat-cat col-md-6">
                <div class="stat-wrapper lg-stat margin-top margin-right-remover">
                  <span class="stat-label">Time Played</span>
                  <div class="stat-md-text">All Time</div>
                  <div class="stat-sm-text">3d 2h 19m</div>
                </div>
              </div>

              <div class="stat-cat col-md-3">
                <div class="stat-wrapper stat-sm margin-top margin-left-remover">
                  <span class="stat-label">Kills</span>
                  <div class="stat-md-text">6245</div>
                </div>
              </div>
              <div class="stat-cat stat-cat-sm col-md-3">
                <div class="stat-wrapper stat-sm margin-top">
                  <span class="stat-label">Games Played</span>
                  <div class="stat-md-text">218</div>
                </div>
              </div>
              <div class="stat-cat col-md-3">
                <div class="stat-wrapper stat-sm margin-top">
                  <span class="stat-label">Acti. Clr</span>
                  <div class="stat-md-text">65</div>
                </div>
              </div>
              <div class="stat-cat col-md-3">
                <div class="stat-wrapper stat-sm margin-top margin-right-remover">
                  <span class="stat-label">Orbs Gen</span>
                  <div class="stat-md-text">155</div>
                </div>
              </div>
              <div class="stat-cat col-md-3">
                <div class="stat-wrapper stat-sm margin-left-remover">
                  <span class="stat-label">Headshots</span>
                  <div class="stat-md-text">473</div>
                </div>
              </div>
              <div class="stat-cat col-md-3">
                <div class="stat-wrapper stat-sm">
                  <span class="stat-label">Abil. Kills</span>
                  <div class="stat-md-text">953</div>
                </div>
              </div>
              <div class="stat-cat col-md-3">
                <div class="stat-wrapper stat-sm">
                  <span class="stat-label">Deaths</span>
                  <div class="stat-md-text">236</div>
                </div>
              </div>
              <div class="stat-cat col-md-3">
                <div class="stat-wrapper stat-sm margin-right-remover">
                  <span class="stat-label">Revives</span>
                  <div class="stat-md-text">98</div>
                </div>
              </div>

              <div class="stat-cat col-md-12">
                <div class="stat-wrapper return-tab margin-right-remover">
                  <div class="stat-md-text">
                    <img src="images/back.png">
                    <span class="return-text">Return</span>
                  </div>
                </div>
              </div>

            </div>

          </div>
        
        </div>

        <div class="col-md-2 vs-container">
          <button id="vs-submit" class="btn btn-default vs-btn" tabindex="3"><img class="submit-img" src="images/vs.png"><img class="loader" src="images/loader.png"><img class="load-error" src="images/error-submit.png"><img class="load-success" src="images/success.png"></button>
        </div>

        <div class="col-md-5 right-container">
          
          <form>
            <div class="form-group right-corner corner-container">
              <input type="text" class="form-control" id="playerB" name="playerB" tabindex="2" placeholder="Player B" value="xWallax">
            </div>
            <div class="form-group selector-container">
              <select name="playerBPlatform" id="playerB-selector" class="form-control">
                <option value="">--Choose your Platform--</option>
                <option value="2">PlayStation Network</option>
                <option value="1">Xbox Live</option>
              </select>
            </div>
          </form>

          <div class="profile-characters profileB">
            <div class="character col-md-12" id="profile-b-1">
              <img src="images/test.png"><span class="char-class">Hunter</span><span class="char-light-level"><img class="light-icon" src="images/light.png">243</span>
            </div>
            <div class="character col-md-12" id="profile-b-2">
              <img src="images/test.png"><span class="char-class">Titan</span><span class="char-light-level"><img class="light-icon" src="images/light.png">228</span>
            </div>
            <div class="character col-md-12" id="profile-b-3">
              <img src="images/test.png"><span class="char-class">Warlock</span><span class="char-light-level"><img class="light-icon" src="images/light.png">275</span>
            </div>

            <div class="help-text col-md-12">
              <img src="images/info.png"><span class="stat-lg-text">Please select a character to compare</span>
            </div>

            <div class="character-stats profileB-stats col-mad-12">
              <div class="stat-cat col-md-12">
                <div class="stat-wrapper margin-top-remover margin-left-remover margin-right-remover">
                  Overall
                </div>
              </div>
              <div class="stat-cat col-md-4">
                <div class="stat-wrapper margin-top-remover margin-left-remover">
                  Story
                </div>
              </div>
              <div class="stat-cat col-md-4">
                <div class="stat-wrapper margin-top-remover">
                  Strike
                </div>
              </div>
              <div class="stat-cat col-md-4">
                <div class="stat-wrapper margin-top-remover margin-right-remover">
                  Patrol
                </div>
              </div>
              <div class="stat-cat col-md-4">
                <div class="stat-wrapper margin-top-remover margin-left-remover">
                  Raid
                </div>
              </div>
              <div class="stat-cat col-md-4">
                <div class="stat-wrapper margin-top-remover">
                  POE
                </div>
              </div>
              <div class="stat-cat col-md-4">
                <div class="stat-wrapper margin-top-remover margin-right-remover">
                  Crucible
                </div>
              </div>

              <div class="stat-cat col-md-6">
                <div class="stat-wrapper lg-stat margin-top margin-left-remover">
                  <span class="stat-label">Kill/Death</span>
                  <div class="stat-lg-text">42.78</div>
                </div>
              </div>
              <div class="stat-cat col-md-6">
                <div class="stat-wrapper lg-stat margin-top margin-right-remover">
                  <span class="stat-label">Time Played</span>
                  <div class="stat-md-text">All Time</div>
                  <div class="stat-sm-text">2d 0h 8m</div>
                </div>
              </div>

              <div class="stat-cat col-md-3">
                <div class="stat-wrapper stat-sm margin-top margin-left-remover">
                  <span class="stat-label">Kills</span>
                  <div class="stat-md-text">5682</div>
                </div>
              </div>
              <div class="stat-cat stat-cat-sm col-md-3">
                <div class="stat-wrapper stat-sm margin-top">
                  <span class="stat-label">Games Played</span>
                  <div class="stat-md-text">151</div>
                </div>
              </div>
              <div class="stat-cat col-md-3">
                <div class="stat-wrapper stat-sm margin-top">
                  <span class="stat-label">Acti. Clr</span>
                  <div class="stat-md-text">84</div>
                </div>
              </div>
              <div class="stat-cat col-md-3">
                <div class="stat-wrapper stat-sm margin-top margin-right-remover">
                  <span class="stat-label">Orbs Gen</span>
                  <div class="stat-md-text">123</div>
                </div>
              </div>
              <div class="stat-cat col-md-3">
                <div class="stat-wrapper stat-sm margin-left-remover">
                  <span class="stat-label">Headshots</span>
                  <div class="stat-md-text">645</div>
                </div>
              </div>
              <div class="stat-cat col-md-3">
                <div class="stat-wrapper stat-sm">
                  <span class="stat-label">Abil. Kills</span>
                  <div class="stat-md-text">567</div>
                </div>
              </div>
              <div class="stat-cat col-md-3">
                <div class="stat-wrapper stat-sm">
                  <span class="stat-label">Deaths</span>
                  <div class="stat-md-text">346</div>
                </div>
              </div>
              <div class="stat-cat col-md-3">
                <div class="stat-wrapper stat-sm margin-right-remover">
                  <span class="stat-label">Revives</span>
                  <div class="stat-md-text">29</div>
                </div>
              </div>

              <div class="stat-cat col-md-12">
                <div class="stat-wrapper return-tab margin-right-remover">
                  <div class="stat-md-text">
                    <img src="images/back.png">
                    <span class="return-text">Return</span>
                  </div>
                </div>
              </div>

            </div>

          </div>

        </div>
      </div>

  </body>
  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>-->
    <script src="bower_components/jquery/dist/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="bower_components/jquery-validation/dist/jquery.validate.min.js"></script>
    <script type='text/javascript' src='vendor/particleground/jquery.particleground.min.js'></script>
    <script src="js/ui.js"></script>
    <script src="js/ajax-calls.js"></script>
    <script src="js/functions.js"></script>
</html>
