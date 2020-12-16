<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Google FAQ</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Roboto:wght@400;500;700&display=swap"
          rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <link rel="stylesheet" href="./css/style.css">
  </head>
  <body>
    <!-- Header -->
    <header class="d-flex">
      <div class="header-top d-flex">
        <section class="header-sx d-flex">
          <img src="./img/google-logo.png" alt="logo">
          <h3>Privacy e termini</h3>
        </section>
        <section class="header-dx d-flex">
          <i class="fas fa-th"></i>
          <i class="fas fa-user-circle"></i>
        </section>
      </div>

      <!-- Nav -->
      <nav class="main-navbar d-flex">
        <ul class="navbar d-flex">
          <li> <a href="#"> Introduzione </a> </li>
          <li> <a href="#"> Norme sulla privacy </a> </li>
          <li> <a href="#"> Termini di servizio </a> </li>
          <li> <a href="#"> Tecnologie </a> </li>
          <li> <a href="#"> Domande frequenti </a> </li>
        </ul>
      </nav>
    </header>

    <!-- Main content -->
    <main>
      <div class="content-container">
        <!-- PHP -->
        <?php
        $Faqs = [
          [
            'Q' => '1.Come state implementando la recente decisione della
                    Corte di giustizia dell\'Unione europea (CGUE) relativa al diritto all\'oblio?',
            'A' => ['La recente decisione della Corte di giustizia dell\'Unione europea ha
                    profonde conseguenze per i motori di ricerca in Europa. La Corte ha
                    stabilito che alcuni utenti hanno il diritto di chiedere ai motori di
                    ricerca come Google di rimuovere risultati relativi a chiavi di ricerca
                    che includono il proprio nome. Per poter essere rimossi, i risultati
                    visualizzati devono essere inadeguati, irrilevanti o non più rilevanti, o eccessivi.',

                    'Da quando questa decisione è stata pubblicata il 13 maggio 2014,
                    abbiamo lavorato incessantemente per uniformarci a essa.
                    Si tratta di una procedura complessa perché dobbiamo valutare
                    ogni singola richiesta e effettuare un bilanciamento tra il
                    diritto dell\'individuo a controllare i suoi dati personali
                    ed il diritto di tutti di conoscere e distribuire le informazioni.',

                    'Per presentare una richiesta di rimozione, compila questo modulo web.
                    Riceverai una risposta automatica che conferma la ricezione della tua richiesta.
                    Dopodiché valuteremo il tuo caso (tieni presente che potrebbe occorrere un po\'
                    di tempo perché abbiamo già ricevuto tante richieste simili).
                    Nel valutare la richiesta, considereremo se i risultati includono informazioni obsolete relative alla tua vita privata.
                    Considereremo inoltre se vi è un interesse pubblico a che le informazioni rimangano nei nostri risultati delle ricerche,
                    ad esempio se riguardano frodi finanziarie, negligenza professionale, condanne penali o la tua condotta pubblica in relazione a un pubblico ufficio (eletto o non eletto).
                    Queste valutazioni sono complesse e, in quanto organizzazione privata,
                    potremmo non essere nella posizione giusta per prendere decisioni in merito al tuo caso. Se non sei d\'accordo con la nostra valutazione, puoi rivolgerti all\'Autorità garante per la protezione dei dati personali nel tuo paese.',

                    'Nei prossimi mesi lavoreremo a stretto contatto con le autorità
                    per la protezione dei dati e con altre autorità per perfezionare il nostro approccio.
                    La decisione della CGUE rappresenta un cambiamento significativo per i motori di ricerca.
                    Siamo preoccupati per le sue conseguenze, ma riteniamo anche
                    che sia importante rispettare la decisione della Corte e ci stiamo adoperando per predisporre una procedura conforme alla legge.',

                    'Quando cerchi un nome, potresti trovare una notifica in cui
                    viene spiegato che i risultati potrebbero essere stati modificati
                    nel rispetto delle leggi europee per la protezione dei dati.
                    Mostriamo questa notifica agli utenti europei quando cercano
                    la maggior parte dei nomi, non soltanto le pagine che sono state soggette a una rimozione.'
                  ],
          ],
          [
            'Q' => '2.Come state implementando la recente decisione della
                    Corte di giustizia dell\'Unione europea (CGUE) relativa al diritto all\'oblio?',
            'A' => '2.La recente decisione della Corte di giustizia dell\'Unione europea ha
                    profonde conseguenze per i motori di ricerca in Europa. La Corte ha
                    stabilito che alcuni utenti hanno il diritto di chiedere ai motori di
                    ricerca come Google di rimuovere risultati relativi a chiavi di ricerca
                    che includono il proprio nome. Per poter essere rimossi, i risultati
                    visualizzati devono essere inadeguati, irrilevanti o non più rilevanti, o eccessivi.'
          ],
          [
            'Q' => '3.Come state implementando la recente decisione della
                    Corte di giustizia dell\'Unione europea (CGUE) relativa al diritto all\'oblio?',
            'A' => '3.La recente decisione della Corte di giustizia dell\'Unione europea ha
                    profonde conseguenze per i motori di ricerca in Europa. La Corte ha
                    stabilito che alcuni utenti hanno il diritto di chiedere ai motori di
                    ricerca come Google di rimuovere risultati relativi a chiavi di ricerca
                    che includono il proprio nome. Per poter essere rimossi, i risultati
                    visualizzati devono essere inadeguati, irrilevanti o non più rilevanti, o eccessivi.'
          ],

        ];

        foreach ($Faqs as $key => $Faq) { ?>
            <h3 class="title"><?php echo $Faq['Q']; ?> </h3>

            <?php foreach ($Faq['A'] as $value ) { ?>
              <p class="text"> <?php echo $value; ?> </p>

            <!-- }?> -->
        <?php }} ?>


      </div>
    </main>


  </body>
</html>
