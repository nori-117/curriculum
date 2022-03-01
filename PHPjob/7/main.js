//==========
// 問1
//==========
let numbers = [2, 5, 12, 13, 15, 18, 22];
//ここに答えを実装してください。↓↓↓
function isEven(num) {
  if(num%2 === 0) {
    console.log(num + 'は偶数です');
  }
}

for(i=0; i<numbers.length; i++) {
  isEven(numbers[i]);
}


//==========
// 問2
//==========
class Car {
  constructor(gas, num) {
    this.gas = gas;
    this.num = num;
  }
  getNumGas() {
    console.log(`ガソリンは${this.gas}です。ナンバーは${this.num}です`);
  }
}