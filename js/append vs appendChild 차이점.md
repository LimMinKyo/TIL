`appendChild()`는 DOM 함수이고
append는 JavaScript 함수

`append()` 함수를 더 선호한다.
append를 할 때 문자열을 삽입할 수 있다.

먼저 이렇게 만들 수 있다.

```js
document.getElementById('myId').append('Hello');
```

하지만 이렇게는 만들 수 없다.

```js
document.getElementById('myId').appendChild('Hello');
```

아래와 같은 예외 발생

> Uncaught TypeError: Failed to execute 'appendChild' on 'Node': parameter 1 is not of type 'Node'.

왜?
appendChild 함수에는 parameter(매개변수)와 같은 element(요소)가 필요하다.

이렇게 만들 수 없다.

```js
document.getElementById('myId').appendChild('<p></p>');
```

그러나 이것은 만들 수 있다.

```js
var p = document.createElement('p');
document.getElementById('myId').appendChild(p);
```

- 참고: https://wrkbr.tistory.com/563
- 참고: https://rpubs.com/raulUbiqum/append
