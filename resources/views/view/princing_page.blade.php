<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>princing</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.4/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-DQvkBjpPgn7RC31MCQoOeC9TI2kdqa4+BSgNMNj8v77fdC77Kj5zpWFTJaaAoMbC" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Comic+Neue&display=swap" rel="stylesheet"> 
    <link rel="stylesheet" href="{{ asset('css/pricing_page_style.css') }}">
</head>
<body>
    <div class="pricing-header p-3 pb-md-4 mx-auto text-center">
        <h2 class="display-4 fw-normal text-body-emphasis">Pick Your Learning Adventure!</h2>
        <p class="fs-5 text-body-secondary">Découvrez des formules simples et adaptées pour offrir à vos enfants une expérience d'apprentissage amusante, motivante et accessible. Que vous commenciez gratuitement ou que vous souhaitiez débloquer plus de contenu, nos plans sont conçus pour s'adapter à chaque étape de leur aventure éducative !</p>
      </div>
      <main>
        <div class="row row-cols-1 row-cols-md-3 mb-3 text-center">
          <div class="col">
            <div class="card mb-4 rounded-3 shadow-sm">
              <div class="card-header py-3">
                <h4 class="my-0 fw-normal">Petit élève</h4>
              </div>
              <div class="card-body">
                <h1 class="card-title pricing-card-title">$0<small class="text-body-secondary fw-light">/mo</small></h1>
                <ul class="list-unstyled mt-3 mb-4">
                  <li>🎨 Accès à 5 jeux éducatifs (lettres, chiffres, formes...)</li>
                  <li>📚 Une histoire animée à lire ou écouter</li>
                  <li>🖌️ Utilisation de l'atelier de coloriage en ligne</li>
                </ul>
                <button type="button" class="w-100 btn btn-lg btn-outline-primary">Sign up for free</button>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card mb-4 rounded-3 shadow-sm">
              <div class="card-header py-3">
                <h4 class="my-0 fw-normal">Super apprenti</h4>
              </div>
              <div class="card-body">
                <h1 class="card-title pricing-card-title">$15<small class="text-body-secondary fw-light">/mo</small></h1>
                <ul class="list-unstyled mt-3 mb-4">
                  <li>🧩 Accès à 15 jeux éducatifs</li>
                  <li>📖 5 histoires interactives avec voix et animations</li>
                  <li>🎨 Accès à la galerie magique de coloriage</li>
                </ul>
                <button type="button" class="w-100 btn btn-lg btn-primary">Get started</button>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card mb-4 rounded-3 shadow-sm border-primary">
              <div class="card-header py-3 text-bg-primary border-primary">
                <h4 class="my-0 fw-normal">Maître du savoir</h4>
              </div>
              <div class="card-body">
                <h1 class="card-title pricing-card-title">$29<small class="text-body-secondary fw-light">/mo</small></h1>
                <ul class="list-unstyled mt-3 mb-4">
                  <li>🧠 Accès complet à tous les jeux et quiz</li>
                  <li>📚 Histoires illimitées avec voix-off</li>
                  <li>🎤 Ateliers de chant, dessin ou langues</li>
                </ul>
                <button type="button" class="w-100 btn btn-lg btn-primary">Contact us</button>
              </div>
            </div>
          </div>
        </div>
    
        <h2 class="display-6 text-center mb-4">Compare plans</h2>
    
        <div class="table-responsive">
          <table class="table text-center">
            <thead>
              <tr>
                <th style="width: 34%;"></th>
                <th style="width: 22%;">Free</th>
                <th style="width: 22%;">Pro</th>
                <th style="width: 22%;">Enterprise</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row" class="text-start">Public</th>
                <td><svg class="bi" width="24" height="24" role="img" aria-label="Included"><use xlink:href="#check"></use></svg></td>
                <td><svg class="bi" width="24" height="24" role="img" aria-label="Included"><use xlink:href="#check"></use></svg></td>
                <td><svg class="bi" width="24" height="24" role="img" aria-label="Included"><use xlink:href="#check"></use></svg></td>
              </tr>
              <tr>
                <th scope="row" class="text-start">Private</th>
                <td></td>
                <td><svg class="bi" width="24" height="24" role="img" aria-label="Included"><use xlink:href="#check"></use></svg></td>
                <td><svg class="bi" width="24" height="24" role="img" aria-label="Included"><use xlink:href="#check"></use></svg></td>
              </tr>
            </tbody>
    
            <tbody>
              <tr>
                <th scope="row" class="text-start">Permissions</th>
                <td><svg class="bi" width="24" height="24" role="img" aria-label="Included"><use xlink:href="#check"></use></svg></td>
                <td><svg class="bi" width="24" height="24" role="img" aria-label="Included"><use xlink:href="#check"></use></svg></td>
                <td><svg class="bi" width="24" height="24" role="img" aria-label="Included"><use xlink:href="#check"></use></svg></td>
              </tr>
              <tr>
                <th scope="row" class="text-start">Sharing</th>
                <td></td>
                <td><svg class="bi" width="24" height="24" role="img" aria-label="Included"><use xlink:href="#check"></use></svg></td>
                <td><svg class="bi" width="24" height="24" role="img" aria-label="Included"><use xlink:href="#check"></use></svg></td>
              </tr>
              <tr>
                <th scope="row" class="text-start">Unlimited members</th>
                <td></td>
                <td><svg class="bi" width="24" height="24" role="img" aria-label="Included"><use xlink:href="#check"></use></svg></td>
                <td><svg class="bi" width="24" height="24" role="img" aria-label="Included"><use xlink:href="#check"></use></svg></td>
              </tr>
              <tr>
                <th scope="row" class="text-start">Extra security</th>
                <td></td>
                <td></td>
                <td><svg class="bi" width="24" height="24" role="img" aria-label="Included"><use xlink:href="#check"></use></svg></td>
              </tr>
            </tbody>
          </table>
        </div>
      </main>
</body>
</html>