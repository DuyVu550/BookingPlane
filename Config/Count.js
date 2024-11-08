document.addEventListener('DOMContentLoaded', function () {
    function updateCombinedValues() {
      const young = document.getElementById('young').value || 0;
      const middle = document.getElementById('middle').value || 0;
      const old = document.getElementById('old').value || 0;
      const displayText = `Trẻ em: ${young}, Người lớn: ${middle}, Người già: ${old}`;
      document.getElementById('value-display').textContent = displayText;
    }
    document.getElementById('young').addEventListener('input', updateCombinedValues);
    document.getElementById('middle').addEventListener('input', updateCombinedValues);
    document.getElementById('old').addEventListener('input', updateCombinedValues);
  
    document.getElementById('increase-young').addEventListener('click', function (event) {
      const youngInput = document.getElementById('young');
      youngInput.value = parseInt(youngInput.value) + 1;
      updateCombinedValues();
      event.stopPropagation();
    });
  
    document.getElementById('increase-middle').addEventListener('click', function (event) {
      const middleInput = document.getElementById('middle');
      middleInput.value = parseInt(middleInput.value) + 1;
      updateCombinedValues();
      event.stopPropagation();
    });
  
    document.getElementById('increase-old').addEventListener('click', function (event) {
      const oldInput = document.getElementById('old');
      oldInput.value = parseInt(oldInput.value) + 1;
      updateCombinedValues();
      event.stopPropagation();
    });
  
    document.getElementById('decrease-young').addEventListener('click', function (event) {
      const youngInput = document.getElementById('young');
      if (youngInput.value > 0) {
        youngInput.value = parseInt(youngInput.value) - 1;
        updateCombinedValues();
      }
  
      event.stopPropagation();
    });
  
    document.getElementById('decrease-middle').addEventListener('click', function (event) {
      const middleInput = document.getElementById('middle');
      if (middleInput.value > 0) {
        middleInput.value = parseInt(middleInput.value) - 1;
        updateCombinedValues();
      }
  
      event.stopPropagation();
    });
  
    document.getElementById('decrease-old').addEventListener('click', function (event) {
      const oldInput = document.getElementById('old');
      if (oldInput.value > 0) {
        oldInput.value = parseInt(oldInput.value) - 1;
        updateCombinedValues();
      }
  
      event.stopPropagation();
    });
  
    document.getElementById('peoples-select-container').addEventListener('click', function (event) {
      if (event.target.tagName.toLowerCase() === 'input') return;
  
      const container = document.getElementById('peoples-select-container');
      container.classList.toggle('active');
  
      const displayStyle = container.classList.contains('active') ? 'block' : 'none';
  
      document.getElementById('young-select').style.display = displayStyle;
      document.getElementById('middle-select').style.display = displayStyle;
      document.getElementById('old-select').style.display = displayStyle;
    });
    updateCombinedValues();
  });
  