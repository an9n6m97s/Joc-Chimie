$(document).ready(function() {
    // Verifică dacă utilizatorul accesează de pe un dispozitiv mobil
    var isMobile = /iPhone|iPad|iPod|Android/i.test(navigator.userAgent);

    // Dacă este un dispozitiv mobil, afișează pagina de eroare
    if (isMobile) {
        // Crează elementul pentru mesajul de eroare
        var errorMessage = $('<h1 class="error-message">Accesul de pe dispozitive mobile este blocat pe acest site.</h1>');
        
        // Adaugă mesajul de eroare în body
        $('body').empty().append(errorMessage);
        
        // Elimină toate stilurile de pe body
        $('body').removeAttr('style');
        $('body').css('background', 'none');
    }

    
});
// Navbar
$(document).ready(function() {
    $(".sidebar-dropdown > a").click(function() {
        $(".sidebar-submenu").slideUp(200);
        if (
            $(this)
                .parent()
                .hasClass("active")
        ) {
            $(".sidebar-dropdown").removeClass("active");
            $(this)
                .parent()
                .removeClass("active");
        } else {
            $(".sidebar-dropdown").removeClass("active");
            $(this)
                .next(".sidebar-submenu")
                .slideDown(200);
            $(this)
                .parent()
                .addClass("active");
        }
    });

    $("#close-sidebar").click(function() {
        $(".page-wrapper").removeClass("toggled");
    });
    $("#show-sidebar").click(function() {
        $(".page-wrapper").addClass("toggled");
    });
});

// Admin Login
$(document).ready(function() {
    // Verificăm dacă există un cookie cu numele "adminLoggedIn"
    if (getCookie("066d818786f96d714930205bf17c455de1c91fe42bab546e8cf705e6566358f9") === "true") {
      // Ascundem butonul când utilizatorul este conectat
      $("#admin_login").css("--fa-primary-color", "#b30000");
      $("#admin_login").css("--fa-secondary-color", "#b30000");
      
    } else {
      $("#admin_login").css("--fa-primary-color", "#dcdcdc");
      $("#admin_login").css("--fa-secondary-color", "#dcdcdc");
      // Dacă nu există, adăugăm un eveniment de click pe butonul cu id-ul "admin_login"
      $("#admin_login").on("click", function() {
        // Afișăm un prompt pentru introducerea parolei
        var password = prompt("Enter admin password:");
  
        // Verificăm parola (poți face verificări mai robuste în funcție de nevoile tale)
        if (password === "Admin921@") {
          // Setăm un cookie cu numele "adminLoggedIn" și valoarea "true"
          setCookie("066d818786f96d714930205bf17c455de1c91fe42bab546e8cf705e6566358f9", "true", 1); // Cookie expiră în 1 zi (poți ajusta acest interval)
          alert("Login successful as admin");
          // Ascundem butonul după autentificare
          window.location.reload();
        } else {
          alert("Incorrect password");
        }
      });
    }
  });
  
// Funcție pentru citirea valorii unui cookie
function getCookie(name) {
  var match = document.cookie.match(new RegExp(name + '=([^;]+)'));
  if (match) return match[1];
}

// Funcție pentru setarea unui cookie
function setCookie(name, value, days) {
  var expires = "";
  if (days) {
    var date = new Date();
    date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
    expires = "; expires=" + date.toUTCString();
  }
  document.cookie = name + "=" + value + expires + "; path=/";
}

// Developer Credits Modal
$(document).ready(function() {
  $("#credits_page").on("click", function() {
    // Deschide modalul cu ID-ul #creditsModal
    $("#creditsModal").modal("show");
  });
});

// Support Modal
$(document).ready(function() {
  $("#support_modal").on("click", function() {
    // Deschide modalul cu ID-ul #creditsModal
    $("#supportModal").modal("show");
  });
});

// Help Hint Modal
$(document).ready(function () {
  $("#help_menu_toggler").css("cursor", "pointer")

  $("#help_menu_toggler").click(function () {
    $("#helpModal").modal("show");
  });
});