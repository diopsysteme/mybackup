

  updates = document.querySelectorAll('.update');
  updates.forEach(update => {
    update.addEventListener('click', () => {
      let maVariable = update.value;
      let xhr = new XMLHttpRequest();
      xhr.open("POST", "update.php", true);
      xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
      xhr.onreadystatechange = function() {
        if (this.readyState === XMLHttpRequest.DONE && this.status === 200) {
          console.log("Réponse du serveur : "+this.responseText);
        }
      };
      xhr.send("variable="+maVariable);
    //  window.location.href="affi.php" 
    })
  })
