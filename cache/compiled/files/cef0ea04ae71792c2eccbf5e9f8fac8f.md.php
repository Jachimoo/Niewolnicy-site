<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledMarkdownFile',
    'filename' => '/user/pages/05.kontakt/_mainhero2/hero.md',
    'modified' => 1643812411,
    'data' => [
        'header' => [
            'title' => 'Mainhero',
            'body_classes' => 'modular',
            'hero_classes' => 'hero-fullscreen',
            'media_order' => 'cmyk_ns_poziome-biale-bez_tla.png,email.svg,facebook.svg,instagram.svg,youtube.svg,JSJJ6371-1-min_11zon (3)_11zon.jpg',
            'hero_image' => 'JSJJ6371-1-min_11zon (3)_11zon.jpg'
        ],
        'frontmatter' => 'title: Mainhero
body_classes: modular
hero_classes: hero-fullscreen
media_order: \'cmyk_ns_poziome-biale-bez_tla.png,email.svg,facebook.svg,instagram.svg,youtube.svg,JSJJ6371-1-min_11zon (3)_11zon.jpg\'
hero_image: \'JSJJ6371-1-min_11zon (3)_11zon.jpg\'',
        'markdown' => '<div class="contacts_container" data-aos="fade-in" data-aos-duration="10">
    <div class="dane">
    <h4>Dane kontaktowe:</h4>
    Telefon: 662 175 567 <br>
    E-mail: niewolnicysystemu@gmail.com 
    </div>
    <form id="contact-form">
        <h4>Formularz kontaktowy</h4>
        <input type="hidden" name="contact_number">
        <input type="text"  class="form-input" name="user_name" placeholder="Imię i nazwisko" required> <br>
        <input type="email" class="form-input" name="user_email" placeholder="Adres email" required><br>
        <textarea name="message" class="form-input msg" maxlength="1000" minlength="25" placeholder="Wiadomość..." required></textarea>
        <input type="submit" class="btn btn-lg mybtn" value="Wyślij"> <br>
    </form>
</div>
<style>
   .contacts_container{
      background-color: #181a1bf1 ;
      padding: 10px;
      align-items: center;
      width: 50%;
      margin-left: 25%;
      margin-top: -5%;
      height: 60%; 
      border-radius: 5px;
      box-shadow: rgba(0, 0, 0, 0.753) 0px 8px 16px 0px, rgba(0, 0, 0, 0.712) 8px 0px 16px 0px;
      border:  #35393D 1px solid;
      border-radius: 5px;
    }
    textarea.msg 
    {
        height: 30vh;
    }   
    .dane {
        margin-top: -35px;
    }
    .mybtn{
        margin-top: 2%;
    }
    .form-input{
        resize: none;
        width: 80%;
        margin-left: 10% ;
        margin-right: 10%;
    }
    @media only screen and (max-width: 1250px) {
  .contacts_container{
      width: 75%;
      margin-left: 12.5%;
  }
}
</style>
'
    ]
];
