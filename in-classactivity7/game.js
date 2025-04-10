document.addEventListener('DOMContentLoaded', function() {
   
    let level = 1;
    let clickCount = 0;
    const maxClicksPerLevel = 3;
    const maxLevel = 6;
    let timeoutDelay = 500;
    let autoMoveTimer = null; 

    const button = document.getElementById('gameButton');
    const levelDisplay = document.getElementById('level');
    const clickCountDisplay = document.getElementById('clickCount');
    
   
    function updateUI() {
      levelDisplay.textContent = level;
      clickCountDisplay.textContent = clickCount;
    }

    function updateTimeoutDelay() {
      timeoutDelay = 500 - (level - 1) * 100;
      if (timeoutDelay < 0) {
        timeoutDelay = 0;
      }
    }
    
   
    function moveButton() {
      const newTop = Math.random() * 300 + "px";
      const newLeft = Math.random() * 300 + "px";
      button.style.marginTop = newTop;
      button.style.marginLeft = newLeft;
    }
    
   
    function autoMove() {
      moveButton();
      autoMoveTimer = setTimeout(autoMove, timeoutDelay);
    }
    

    button.addEventListener('mouseover', function() {
      if (!autoMoveTimer) {
        autoMoveTimer = setTimeout(autoMove, timeoutDelay);
      }
    });
    
  
    button.addEventListener('mouseout', function() {
      if (autoMoveTimer) {
        clearTimeout(autoMoveTimer);
        autoMoveTimer = null;
      }
    });
    
  
    button.addEventListener('click', function() {
      clickCount++;
      updateUI();
    
      if (clickCount >= maxClicksPerLevel) {
        if (level < maxLevel) {
          alert("Seviye " + level + " tamamlandı! Yeni seviyeye geçiliyor.");
          level++;
        } else {
          alert("Tebrikler! Tüm seviyeleri tamamladınız.");
          level = 1;
        }
    
        clickCount = 0;
        updateUI();
        updateTimeoutDelay();
      }
    });
    
  
    updateUI();
    updateTimeoutDelay();
  });
  