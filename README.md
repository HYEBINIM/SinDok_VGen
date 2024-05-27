<h2>* 신독 VGen1 & 2 모니터링 페이지</h2><br>
- 240312<br>
초안 개발 시작<br>
- 240315<br>
초안 페이지 개발 완료<br>
- 240425<br>
초안 페이지가 공정 추적이 불가하다고 판단 -> 추적성 페이지 추가<br>
<<<<<<< HEAD
추적성 페이지 AJAX로 데이터 가져옴
추적성 페이지 디자인 변경
=======
추적성 페이지 AJAX로 데이터 가져옴<br>
추적성 페이지 디자인 변경<br>

- 240509<br>
디자인 변경 완료<br>

![메인](https://github.com/HYEBINIM/SinDok_VGen/assets/125339506/30297251-bc4f-435d-829a-cb2f0d9cab85)
![그래프JPG](https://github.com/HYEBINIM/SinDok_VGen/assets/125339506/973aaa6c-25e0-45b6-9249-cfc4fed93629)
![추적성](https://github.com/HYEBINIM/SinDok_VGen/assets/125339506/b6830ef6-98d3-4952-b425-d6d9688cfb33)

- 240522<br>
기존 파일 : graph.html<br>
변경할 파일 : test.html<br>
기존 파일의 메모리가 기하급수적으로 사용량이 증가하여 메모리 부족 현상을 해결하기 위해 그래프를 파괴하고 생성하는 방법이 아닌 Chart.js의 UPDATE API를 사용함<br>

기존 힙 스냅샷<br>
![image](https://github.com/HYEBINIM/SinDok_VGen/assets/125339506/8855ff8b-0391-481b-b76c-ca1015a8fc7a)
변경 후 힙 스냅샷(약 25배 좋아짐)<br>
![image](https://github.com/HYEBINIM/SinDok_VGen/assets/125339506/fdcf3094-8178-47e6-92d0-3bf5e0251d01)
>>>>>>> 9daa20908fafc2d765d5295b7a5dac86968944e6
