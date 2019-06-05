<form class="needs-validation contact" novalidate>
  <div class="form-row">
    <div class="col-md-4 mb-3">
      <label for="validationCustom01">Nom</label>
      <input type="text" class="form-control" id="validationCustom01" placeholder="Nom" required>
    </div>
    <div class="col-md-4 mb-3">
      <label for="validationCustom02">Prenom</label>
      <input type="text" class="form-control" id="validationCustom02" placeholder="Prenom" required>
    </div>
    <div class="col-md-4 mb-3">
      <label for="validationCustomUsername">Mail</label>
      <div class="input-group">
        <div class="input-group-prepend">
          <span class="input-group-text" id="inputGroupPrepend">@</span>
        </div>
        <input type="mail" class="form-control" id="validationCustomUsername" placeholder="Mail" aria-describedby="inputGroupPrepend" required>
      </div>
    </div>
  </div>
  <div class="form-row">
    <div class="col-md-6 mb-3">
      <label for="validationCustom03">Ville</label>
      <input type="text" class="form-control" id="validationCustom03" placeholder="Ville" required>
    </div>
    <div class="col-md-3 mb-3">
      <label for="validationCustom05">Code postal</label>
      <input type="text" class="form-control" id="validationCustom05" placeholder="Code postal" required>
    </div>
  </div>
  <div class="form-group">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
      <label class="form-check-label" for="invalidCheck">
        Veuillez accepté les conditios <button>politique de confidentialité</button>
      </label>
    </div>
  </div>
  <button class="btn btn-primary" type="submit">Envoyé</button>
</form>

<script>
// Example starter JavaScript for disabling form submissions if there are invalid fields
(function() {
  'use strict';
  window.addEventListener('load', function() {
    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    var forms = document.getElementsByClassName('needs-validation');
    // Loop over them and prevent submission
    var validation = Array.prototype.filter.call(forms, function(form) {
      form.addEventListener('submit', function(event) {
        if (form.checkValidity() === false) {
          event.preventDefault();
          event.stopPropagation();
        }
        form.classList.add('was-validated');
      }, false);
    });
  }, false);
})();
</script>