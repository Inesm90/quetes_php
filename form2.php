<!DOCTYPE html>
<html lang="fr">

<form  action="redir_form2.php"  method="post">
    <div>
    <label  for="fname">Prénom:</label>
      <input  type="text"  id="fnom"  name="user_fname">
    </div>
    <div>
    <label  for="name">Nom :</label>
      <input  type="text"  id="name"  name="user_name">
    </div>
    <div>
    <label  for="phone">Téléphone :</label>
      <input  type="number"  id="phone"  name="user_phone">
    </div>
    <div>
      <label  for="courriel">Courriel :</label>
        <input  type="email"  id="courriel"  name="user_email">
    </div>
    <div>
          <label for="subject">Sujet</label>
          <select name= "subject" id= "subject" required >
            <option value="info">Demande d'information</option>
            <option value="rdv">Demande de rdv</option>
            <option value="apply">Je souhaite postuler</option>        
          </select>
    </div>
    <div>
      <label  for="message">Message :</label>
      <textarea  id="message"  name="user_message"></textarea>
    </div>
    <div  class="button">
      <button  type="submit">Envoyer votre message</button>
    </div>
  </form>

  </html>