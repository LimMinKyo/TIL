event.currentTarget == the element to which the event handler has been attached.

> The currentTarget read-only property of the Event interface identifies the current target for the event, as the event traverses the DOM. It always refers to the element to which the event handler has been attached, as opposed to Event.target, which identifies the element on which the event occurred and which may be its descendant.

핵심은 currentTarget은 이벤트 핸들러가 부착된 것을 가리킨다는 것이다. <br>
즉, event.target은 부모로부터 이벤트가 위임되어 발생하는 자식의 위치, 내가 클릭한 자식 요소를 반환한다. 하지만 currentTarget은 이벤트가 부착된 부모의 위치를 반환한다.

- 코드

```html
<li>
  <button onClick="{onLogin}">
    <span>Google</span>
  </button>
</li>
<script>
  const onLogin = (event) => {
    console.log(event.target);
    console.log(event.currentTarget);
  };
</script>
```

- 결과

```html
<!-- event.target -->
<span>Google</span>

<!-- event.currentTarget -->
<button>
  <span>Google</span>
</button>
```

event.target은 자식 요소인 span을 리턴하고, event.currentTarget은 부모 요소인 button을 반환하는 것을 알 수 있다. <br>
반드시 구분해서 적절히 사용하도록 하자.

- 출처: https://velog.io/@edie_ko/JavaScript-event-target%EA%B3%BC-currentTarget%EC%9D%98-%EC%B0%A8%EC%9D%B4%EC%A0%90
