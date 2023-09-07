# User Management Exercise with PHP

## Description
In this exercise, we will create a user management application using PHP. Users will be able to register, log in, and view their profiles. We will use sessions and objects to manage user information.

## Instructions
1. **`User` Class**: Create a `User` class that represents a user with attributes such as name, surname, email, and password.

2. **Registration (`register.php`)**: Create a registration page that allows users to enter their name, surname, email, and password. When a user registers, create a `User` object, store it in a session variable, and redirect them to the profile page.

3. **Login (`login.php`)**: Create a login page that allows registered users to log in with their email and password. Check if the user exists in the session variable, and if so, redirect them to the profile page.

4. **Profile (`profile.php`)**: Create a profile page that displays user information such as name, surname, and email. Users should only be able to access this page if they have logged in.

5. **Logout (`logout.php`)**: Create a logout page that destroys the session and redirects the user to the login page.

6. **Security**: Ensure that the pages check for login status and session validity to protect against unauthorized access.

## Notes
This exercise provides a practical opportunity to learn how to use sessions and objects in PHP for user management. In the real world, it's important to implement additional security measures and thorough user data validation to ensure application security.

-----------------------------------------------------------------------------------
# Esercizio di Gestione Utenti con PHP

## Descrizione
In questo esercizio, creeremo un'applicazione di gestione utenti utilizzando PHP. Gli utenti potranno registrarsi, accedere e visualizzare il proprio profilo. Utilizzeremo sessioni e oggetti per gestire le informazioni degli utenti.

## Istruzioni
1. **Classe `User`**: Crea una classe `User` che rappresenti un utente con attributi come nome, cognome, email e password.

2. **Registrazione (`register.php`)**: Crea una pagina di registrazione che consenta agli utenti di inserire nome, cognome, email e password. Quando un utente si registra, crea un oggetto `User`, lo memorizza in una variabile di sessione e lo reindirizza alla pagina del profilo.

3. **Accesso (`login.php`)**: Crea una pagina di accesso che consenta agli utenti registrati di accedere con la loro email e password. Verifica se l'utente esiste nella variabile di sessione e, se sì, reindirizzalo alla pagina del profilo.

4. **Profilo (`profile.php`)**: Crea una pagina del profilo che mostri le informazioni dell'utente, come nome, cognome ed email. L'utente deve essere in grado di accedere solo se ha effettuato l'accesso.

5. **Logout (`logout.php`)**: Crea una pagina di logout che distrugga la sessione e reindirizzi l'utente alla pagina di accesso.

6. **Sicurezza**: Assicurati che le pagine verifichino l'accesso e la validità delle sessioni per proteggere l'accesso non autorizzato.

## Note
Questo esercizio offre un'opportunità pratica per imparare a utilizzare sessioni e oggetti in PHP per la gestione degli utenti. Nel mondo reale, è importante implementare misure di sicurezza aggiuntive e maggiore validazione dei dati utente per garantire la sicurezza dell'applicazione.
