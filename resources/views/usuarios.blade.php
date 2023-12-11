<!DOCTYPE html>
<html>

<head>
  <title>Slot Machine</title>
  <link rel="stylesheet" href="css/stylee.css"/>
</head>

<body>
  <div class="container">
    <div class="slotcontainer">
      <div class="slot">
        <div class="symbols" id="slot1Symbols"></div>
      </div>

      <div class="slot">
        <div class="symbols" id="slot2Symbols"></div>
      </div>

      <div class="slot">
        <div class="symbols" id="slot3Symbols"></div>
      </div>
    </div>

    <div style="display: flex;">
      <button onclick="spin()">Spin</button>
      <button onclick="reset();">Reset</button>
    </div>
  </div>
  <script>
    const slotSymbols = [
        ['🍁', '🏒', '🇨🇦', '🐻', '🎿', '🏂', '🌲', '🍁', '🚣‍♀️', '🦌', '🎣', '🛷'],
        ['🥞', '🍁', '🏞️', '🗻', '🌲', 'a', '🦌', '🐻', '🚣‍♀️', '🏔️', '🏞️', '🛷'],
        ['🇨🇦', '🍁', '🏔️', '🗻', '🌲', 'a', '🏒', '🎣', '🦌', '🐻', '🏂', '🚣‍♀️']
    ];


      function createSymbolElement(symbol) {
        const div = document.createElement('div');
        div.classList.add('symbol');
        div.textContent = symbol;
        return div;
      }

      let spun = false;
      function spin() {
        if (spun) {
          reset();
        }
        const slots = document.querySelectorAll('.slot');
        let completedSlots = 0;

        slots.forEach((slot, index) => {
          const symbols = slot.querySelector('.symbols');
          const symbolHeight = symbols.querySelector('.symbol')?.clientHeight;
          const symbolCount = symbols.childElementCount;

          symbols.innerHTML = '';

          symbols.appendChild(createSymbolElement('❓'));

          for (let i = 0; i < 3; i++) {
            slotSymbols[index].forEach(symbol => {
              symbols.appendChild(createSymbolElement(symbol));
            });
          }

          const totalDistance = symbolCount * symbolHeight;
          const randomOffset = -Math.floor(Math.random() * (symbolCount - 1) + 1) * symbolHeight;
          symbols.style.top = `${randomOffset}px`;

          symbols.addEventListener('transitionend', () => {
            completedSlots++;
            if (completedSlots === slots.length) {
              logDisplayedSymbols();
            }
          }, { once: true });
        });

        spun = true;
      }

      function reset() {
        const slots = document.querySelectorAll('.slot');

        slots.forEach(slot => {
          const symbols = slot.querySelector('.symbols');
          symbols.style.transition = 'none';
          symbols.style.top = '0';
          symbols.offsetHeight;
          symbols.style.transition = '';
        });
      }

      function logDisplayedSymbols() {
        const slots = document.querySelectorAll('.slot');
        const displayedSymbols = [];

        slots.forEach((slot, index) => {
          const symbols = slot.querySelector('.symbols');
          const symbolIndex = Math.floor(Math.abs(parseInt(symbols.style.top, 10)) / slot.clientHeight) % slotSymbols[index].length;
          const displayedSymbol = slotSymbols[index][symbolIndex];
          displayedSymbols.push(displayedSymbol);
        });

        console.log(displayedSymbols);
      }

      spin();
  </script>
</body>

</html>