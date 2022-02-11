<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<style>
    body {
        background-color: rgb(249, 249, 249);
    }
</style>
    <title>PDO</title>
  </head>
  <body>
      <h1>Maak je eigen pizza</h1>

      <div class="container">
        <div class="row">
            <div class="col-sm">
                <form action="./insert.php" method="POST">
                    <p>Bodemformaat</p>
                    <select name="bodemformaat" class="form-select" aria-label="Default select example">
                        <option selected value="20-centimeter">20 centimeter</option>
                        <option value="25-centimeter">25 centimeter</option>
                        <option value="30-centimeter">30 centimeter</option>
                        <option value="35-centimeter">35 centimeter</option>
                        <option value="40-centimeter">40 centimeter</option>
                    </select>
                    <br>
                    <p>Saus</p>
                    <select name="saus" id="saus" class="form-select" aria-label="Default select example">
                        <option selected value="tomatensaus">Tomatensaus</option>
                        <option value="extra-tomatensaus">Extra Tomatensaus</option>
                        <option value="spicy-tomatensaus">Spicy Tomatensaus</option>
                        <option value="bbq-saus">BBQ Saus</option>
                        <option value="creme-fraiche">Creme fraiche</option>                                                        
                    </select>
                    <br>
                    <p>Pizzatoppings</p>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" value="vegan" name="pizzatopping" id="flexRadioDefault1">
                        <label class="form-check-label" for="flexRadioDefault1">
                            vegan
                        </label>
                        </div>

                        <br>
                        <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" value="vegatarish" name="pizzatopping" id="flexRadioDefault2" checked>
                        <label class="form-check-label" for="flexRadioDefault2">
                            vegatarisch
                        </label>
                    </div>

                    <br>
                        <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" value="vlees" name="pizzatopping" id="flexRadioDefault3" checked>
                        <label class="form-check-label" for="flexRadioDefault3">
                            vlees
                        </label>
                    </div>

                    <br>
                    <p>Kruiden</p>
                    <div class="form-check">
                    <input type="hidden" name="peterselie" value="0" />
                    <input class="form-check-input" type="checkbox" value="1" id="peterselie" name="peterselie">
                    <label class="form-check-label" for="peterselie">
                        Peterselie
                    </label>
                    </div>
                    <div class="form-check">
                    <input type="hidden" name="oregano" value="0" />
                    <input class="form-check-input" type="checkbox" value="1" id="oregano"  name="oregano">
                    <label class="form-check-label" for="oregano">
                        Oregano
                    </label>
                    </div>

                    <div class="form-check">
                    <input type="hidden" name="chiliflakes" value="0" />
                    <input class="form-check-input" type="checkbox" value="1" id="chiliflakes" name="chiliflakes">
                    <label class="form-check-label" for="chiliflakes">
                        Chili flakes
                    </label>
                    </div>
                    <div class="form-check">
                    <input type="hidden" name="zwartepeper" value="0" />
                    <input class="form-check-input" type="checkbox" value="1" id="zwartepeper" name="zwartepeper" >
                    <label class="form-check-label" for="zwartepeper">
                        Zwarte peper
                    </label>
                    </div>

                    <div class="d-grid gap-2">
                        <button type="submit" name="submit" class="btn btn-primary">Verstuur</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
<footer>
    <h1><a href="./read.php">User tables</a></h1>
</footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>