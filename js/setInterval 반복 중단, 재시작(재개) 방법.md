# javascript setInterval stop and restart

`setInterval`(콜백함수, 시간)는 "시간(ms)"을 간격으로 "콜백함수"를 반복 호출 하는 함수이다.
 
애니메이션 등을 구현하다보면, 잠깐 반복을 중단했다가, 재시작하는 코드를 구현해야할 때가 있다.

방법은 간단하다.

`setInterval` 함수의 반환값을 변수에 할당해두고, `clearInterval(변수)`를 호출하여 반복을 중단하고, 다시 `setInterval`로 재시작해주면 된다.

## setInterval 중단/재시작 방법

1. `setInterval()` 함수의 반환값을 변수에 할당하여 반복 시작
```js
let 변수 = setInterval(콜백함수, 시간);
```

2. `clearInterval(변수)`로 반복 중단
```js
clearInterval(변수);
```

3. `setInterval()`함수의 반환값을 변수에 재할당하여 재시작
```js
변수 = setInterval(콜백함수, 시간);
```

___

- 출처: https://curryyou.tistory.com/328 [카레유]
