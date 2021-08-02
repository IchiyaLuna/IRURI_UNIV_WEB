<div class="collapse multi-collapse-dept" id="dept-input">
    <div class="container-fluid close-button">
        <div class="row justify-content-end mb-3">
            <button class="btn-close" type="button" data-bs-toggle="collapse" data-bs-target=".multi-collapse-dept"></button>
        </div>
    </div>
    <div class="accordion" id="dept-privacyinfo">
        <div class="accordion-item">
            <h2 class="accordion-header" id="dept-accor-head">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#dept-accor-content">
                    개인정보 제공 및 활용 동의
                </button>
            </h2>

            <div id="dept-accor-content" class="accordion-collapse collapse" data-bs-parent="#dept-privacyinfo">
                <div class="accordion-body">
                    본 합격 예측기가 수집하는 개인정보는 학생의 성별, 학년, 지역, 성적 등의 정보이며 추가로 사이트의 원활한 동작을 위해 접속 정보 등을 수집합니다.
                    이외 민감한 개인정보는 수집 대상이 아니며 사용한 모든 정보는 오직 성적 분석 및 합격 예측에만 사용됩니다.
                    이용자는 합격 예측기를 사용하기 전, 언제나 동의하지 않을 권리가 있으며 이 경우 합격 예측이 불가능합니다.
                    수집한 정보 중 일부는 더 정확한 정보를 이용자에게 제공하기 위한 분석 자료로 보관되며 외부인이 볼 수 없도록 안전하게 저장됩니다.
                    아래 동의 버튼을 누르고 성적 등 정보를 입력하면, 이용자가 본 개인 정보 제공 및 활용에 동의하였다고 간주합니다.
                </div>
            </div>
        </div>
    </div>

    <div class="form-check py-3">
        <input class="form-check-input" type="checkbox" data-bs-toggle="collapse" href="#grade-input-dept" value="" id="check-dept" autocomplete="off">
        <label class="form-check-label" for="check-dept">
            개인정보 제공 및 활용에 동의합니다
        </label>
    </div>

    <div class="grade-input-dept collapse mb-3 show" id="grade-input-dept">
        <div class="card card-body">
            동의를 선택해야 성적을 입력하실 수 있습니다.
        </div>
    </div>

    <div class="grade-input-dept collapse mb-3" id="grade-input-dept">
        <div class="card card-body">
            <form name="dept-input-form" id="dept-input-form" method="POST" action="./result_dept.php" autocomplete="off">
                <h3 class="pb-3 border-bottom">인적사항</h3>
                <div class="personal-info py-3">
                    <div class="row">
                        <div class="col-md mb-3 location-group">
                            <h5>지역</h5>
                            <select class="form-select" id="dept-location-select" name="dept-location-select">
                                <option value="서울" selected>서울</option>
                                <option value="경기">경기도</option>
                                <option value="인천">인천</option>
                                <option value="강원">강원도</option>
                                <option value="충북">충청북도</option>
                                <option value="충남">충청남도</option>
                                <option value="세종">세종시</option>
                                <option value="대전">대전</option>
                                <option value="전북">전라북도</option>
                                <option value="전남">전라남도</option>
                                <option value="광주">광주광역시</option>
                                <option value="경북">경상북도</option>
                                <option value="경남">경상남도</option>
                                <option value="대구">대구</option>
                                <option value="부산">부산</option>
                                <option value="울산">울산</option>
                                <option value="제주">제주도</option>
                            </select>
                        </div>

                        <div class="col-md mb-3 gender-group">
                            <h5>성별</h5>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="dept-gender-radio" id="dept-radio-male" value="1" checked>
                                <label class="form-check-label" for="dept-radio-male">남자</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="dept-gender-radio" id="dept-radio-female" value="2">
                                <label class="form-check-label" for="dept-radio-female">여자</label>
                            </div>
                        </div>

                        <div class="col-md mb-3 type-group">
                            <h5>계열</h5>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="dept-type-radio" id="dept-radio-natural" value="1" checked>
                                <label class="form-check-label" for="dept-radio-natural">인문</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="dept-type-radio" id="dept-radio-literature" value="2">
                                <label class="form-check-label" for="dept-radio-literature">자연</label>
                            </div>
                        </div>
                    </div>
                </div>
                <h3 class="pb-3 border-bottom">학과 분야 선택</h3>
                <div class="categorysel py-3">
                    <div class="row gy-3">
                        <div class="col-md-6 mb-3">
                            <h5>분류</h5>
                            <select class="form-select" id="category" size="5">
                                <option selected>주 분류를 선택해주세요</option>
                                <option value="be">경영 경제</option>
                                <option value="ad">행정</option>
                                <option value="pr">언론</option>

                                <option value="cu">문화</option>
                                <option value="la">언어</option>
                                <option value="en">영어</option>
                                <option value="fo">외국어</option>

                                <option value="we">복지</option>
                                <option value="me">의료</option>

                                <option value="ed">교육</option>

                                <option value="ma">수학</option>

                                <option value="sc">과학</option>
                                <option value="co">컴퓨터</option>
                                <option value="mc">기계</option>
                                <option value="el">전기·전자</option>
                                <option value="as">항공우주</option>
                                <option value="nm">신소재</option>
                                <option value="ca">자동차</option>
                                <option value="ar">도시·건축·토목</option>

                                <option value="hi">역사</option>
                                <option value="ph">철학</option>
                                <option value="re">종교</option>
                                <option value="at">예술</option>

                                <option value="ng">국방</option>
                                <option value="nw">국제</option>
                                <option value="so">사회</option>
                                <option value="ec">자연·환경</option>
                                <option value="fu">융합</option>
                                <option value="fr">자율</option>
                            </select>
                        </div>
                        <div class="col-md-6 mb-3">
                            <h5>세부 분류</h5>
                            <select class="form-select" id="detail" name="deptsel" size="5">
                                <option value="-1" selected>세부 분류를 선택해주세요</option>

                                <option class="be" value="3">E-비즈니스</option>
                                <option class="be" value="4">글로벌 비즈니스</option>
                                <option class="be" value="5">경영</option>
                                <option class="be" value="16">금융 경제</option>
                                <option class="be" value="37">스포츠 산업</option>
                                <option class="be" value="39">글로벌리더</option>
                                <option class="be" value="57">외식경영</option>
                                <option class="be" value="63">무역</option>
                                <option class="be" value="92">소비자</option>

                                <option class="ad" value="17">경찰행정</option>
                                <option class="ad" value="22">행정</option>
                                <option class="ad" value="23">법</option>
                                <option class="ad" value="31">교통</option>
                                <option class="ad" value="54">소방행정</option>
                                <option class="ad" value="113">정치외교정책</option>

                                <option class="pr" value="29">미디어</option>
                                <option class="pr" value="98">언론 신문</option>

                                <option class="cu" value="7">문화</option>
                                <option class="cu" value="28">관광</option>
                                <option class="cu" value="79">북한</option>
                                <option class="cu" value="104">유럽</option>
                                <option class="cu" value="116">아시아</option>

                                <option class="la" value="8">언어</option>
                                <option class="la" value="34">국문</option>
                                <option class="la" value="64">문예창작</option>
                                <option class="la" value="65">문헌정보</option>
                                <option class="la" value="127">한문</option>

                                <option class="en" value="2">영어</option>
                                <option class="en" value="1">영어번역</option>

                                <option class="fo" value="13">아랍어</option>
                                <option class="fo" value="36">그리스·불가리아</option>
                                <option class="fo" value="45">네덜란드</option>
                                <option class="fo" value="46">러시아</option>
                                <option class="fo" value="52">독일어</option>
                                <option class="fo" value="55">동양어</option>
                                <option class="fo" value="58">루마니아</option>
                                <option class="fo" value="60">말레이·인도네시아</option>
                                <option class="fo" value="62">몽골</option>
                                <option class="fo" value="75">베트남</option>
                                <option class="fo" value="80">프랑스</option>
                                <option class="fo" value="81">브라질</option>
                                <option class="fo" value="87">스페인</option>
                                <option class="fo" value="90">세르비아·크로아티아</option>
                                <option class="fo" value="97">스칸다나비아</option>
                                <option class="fo" value="100">아프리카</option>
                                <option class="fo" value="102">우크라이나</option>
                                <option class="fo" value="107">이탈리아</option>
                                <option class="fo" value="108">인도</option>
                                <option class="fo" value="111">일본</option>
                                <option class="fo" value="114">중국</option>
                                <option class="fo" value="115">중동</option>
                                <option class="fo" value="120">체코·슬로바키아</option>
                                <option class="fo" value="123">태국</option>
                                <option class="fo" value="124">터키·아제르바이잔</option>
                                <option class="fo" value="125">페르시아·이란</option>
                                <option class="fo" value="126">포르투갈·폴란드</option>
                                <option class="fo" value="129">헝가리</option>

                                <option class="we" value="11">가족·아동</option>
                                <option class="we" value="12">복지</option>
                                <option class="we" value="84">상담·심리</option>

                                <option class="me" value="14">간호</option>
                                <option class="me" value="38">의예</option>
                                <option class="me" value="67">물리치료·재활</option>
                                <option class="me" value="74">방사선</option>
                                <option class="me" value="89">응급구조</option>
                                <option class="me" value="121">수의예·치의예·한의예</option>
                                <option class="me" value="122">치위생</option>
                                <option class="me" value="128">약</option>

                                <option class="ed" value="27">교육</option>

                                <option class="ma" value="82">통계</option>
                                <option class="ma" value="93">수학</option>

                                <option class="sc" value="24">화학</option>
                                <option class="sc" value="26">과학</option>
                                <option class="sc" value="30">광기술</option>
                                <option class="sc" value="48">뇌과학</option>
                                <option class="sc" value="49">대기과학</option>
                                <option class="sc" value="53">생명과학</option>
                                <option class="sc" value="66">물리학</option>
                                <option class="sc" value="68">미생물</option>
                                <option class="sc" value="70">바이오</option>
                                <option class="sc" value="118">지질학</option>

                                <option class="co" value="0">AI</option>
                                <option class="co" value="6">IT</option>
                                <option class="co" value="10">소프트웨어</option>
                                <option class="co" value="50">데이터·빅데이터</option>
                                <option class="co" value="94">보안</option>

                                <option class="mc" value="41">금속·접합</option>
                                <option class="mc" value="42">기계공</option>
                                <option class="mc" value="44">에너지</option>
                                <option class="mc" value="58">로봇</option>

                                <option class="el" value="9">시스템</option>
                                <option class="el" value="71">반도체</option>
                                <option class="el" value="106">전기·전자</option>
                                <option class="el" value="112">정보통신</option>

                                <option class="as" value="96">항공우주</option>

                                <option class="nm" value="19">나노·소재</option>

                                <option class="ca" value="95">자동차</option>

                                <option class="ar" value="27">건축·건설</option>
                                <option class="ar" value="27">공간정보</option>
                                <option class="ar" value="27">교통</option>
                                <option class="ar" value="27">도시계획</option>
                                <option class="ar" value="27">목재</option>
                                <option class="ar" value="27">삼림·토목</option>


                                <option class="hi" value="18">고고학</option>
                                <option class="hi" value="33">역사</option>
                                <option class="hi" value="110">인류학</option>

                                <option class="ph" value="119">철학</option>

                                <option class="re" value="43">종교</option>

                                <option class="at" value="20">디자인</option>
                                <option class="at" value="40">패션의류</option>
                                <option class="at" value="59">애니메이션</option>
                                <option class="at" value="69">미술</option>
                                <option class="at" value="101">영화예술</option>

                                <option class="ng" value="32">국방</option>

                                <option class="nw" value="35">국제</option>

                                <option class="so" value="83">사회</option>

                                <option class="ec" value="21">환경</option>
                                <option class="ec" value="73">축산·동물</option>
                                <option class="ec" value="88">해양</option>
                                <option class="ec" value="103">원예·조경</option>

                                <option class="ga" value="27">원예</option>

                                <option class="fu" value="105">융합</option>

                                <option class="fr" value="109">자율</option>
                            </select>
                        </div>
                    </div>
                </div>
                <h3>내신</h3>
                <h5 class="pb-3 border-bottom">아직 성적이 없는 경우 0을 입력해주세요.</h5>
                <div class="sushi py-3">
                    <div class="row gy-3">
                        <div class="col-xl-3 first-group">
                            <div class="input-group">
                                <span class="input-group-text" id="ig-first-label">1학년 평균</span>
                                <input type="number" class="form-control form-control-sm text-center" name="dept-first" id="dept-first" placeholder="1.0">
                            </div>
                        </div>

                        <div class="col-xl-3 second-group">
                            <div class="input-group">
                                <span class="input-group-text" id="ig-second-label">2학년 평균</span>
                                <input type="number" class="form-control form-control-sm text-center" name="dept-second" id="dept-second" placeholder="1.0">
                            </div>
                        </div>

                        <div class="col-xl-3 third-group">
                            <div class="input-group">
                                <span class="input-group-text" id="ig-third-label">3학년 평균</span>
                                <input type="number" class="form-control form-control-sm text-center" name="dept-third" id="dept-third" placeholder="1.0">
                            </div>
                        </div>

                        <div class="col-xl-3 calc-btn d-grid gap-2">
                            <a class="btn btn-primary justify-content-md-end" href="./calc" target="_blank" role="button">등급 계산기 바로가기</a>
                        </div>
                    </div>
                </div>
                <h3 class="pb-3 border-bottom">수능(모의고사)</h3>
                <div class="jungshi py-3">
                    <div class="row">
                        <div class="col-xl-6">
                            <div class="row">
                                <div class="col-xl-6">
                                    <div class="input-group mb-3">
                                        <span class="input-group-text" id="year-label">응시 년도</span>
                                        <select class="form-select" id="year" name="dept-yearsel">
                                            <option value="-1" selected>응시하지 않음</option>
                                            <option value="21">21년</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-xl-6">
                                    <div class="input-group mb-3">
                                        <span class="input-group-text" id="month-label">응시 월</span>
                                        <select class="form-select" id="month" name="dept-monthsel">
                                            <option value="-1" selected>응시하지 않음</option>

                                            <option class="21" value="03">3월 학력평가</option>
                                            <option class="21" value="04">4월 학력평가</option>
                                            <option class="21" value="07">7월 학력평가</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="dept-korean-label">국어</span>
                                <select class="form-select" id="dept-korean-type" name="dept-korean-type">
                                    <option value="na" selected>미응시</option>
                                    <option value="tw">화법과작문</option>
                                    <option value="lm">언어와매체</option>
                                </select>
                                <input type="number" class="form-control form-control-sm text-center" name="dept-korean-score" id="dept-korean-score" placeholder="원점수">
                            </div>
                        </div>
                    </div>


                    <div class="row">
                        <div class="col-xl-6">
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="dept-math-label">수학</span>
                                <select class="form-select" id="dept-math-type" name="dept-math-type">
                                    <option value="na" selected>미응시</option>
                                    <option value="ps">확률과통계</option>
                                    <option value="cl">미적분</option>
                                    <option value="ge">기하</option>
                                </select>
                                <input type="number" class="form-control form-control-sm text-center" name="dept-math-score" id="dept-math-score" placeholder="원점수">
                            </div>
                        </div>

                        <div class="col-xl-6">
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="dept-english-label">영어</span>
                                <select class="form-select" id="dept-english-type" name="dept-english-type">
                                    <option value="na" selected>미응시</option>
                                    <option value="at">응시</option>
                                </select>
                                <input type="number" class="form-control form-control-sm text-center" name="dept-english-score" id="dept-english-score" placeholder="원점수">
                            </div>
                        </div>

                        <div class="col-xl-6">
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="dept-history-label">한국사</span>
                                <select class="form-select" id="dept-history-type" name="dept-history-type" disabled>
                                    <option value="at" selected>필수</option>
                                </select>
                                <input type="number" class="form-control form-control-sm text-center" name="dept-history-score" id="dept-history-score" placeholder="원점수">
                            </div>
                        </div>

                        <div class="col-xl-6">
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="dept-selectA-label">탐구 1</span>
                                <select class="form-select" id="dept-selectA-type" name="dept-selectA-type">
                                    <option value="na" selected>미응시</option>
                                    <option value="p1">물리학 I</option>
                                    <option value="c1">화학 I</option>
                                    <option value="b1">생명과학 I</option>
                                    <option value="e1">지구과학 I</option>
                                    <option value="p2">물리학 II</option>
                                    <option value="c2">화학 II</option>
                                    <option value="b2">생명과학 II</option>
                                    <option value="e2">지구과학 II</option>
                                    <option value="kg">한국지리</option>
                                    <option value="wg">세계지리</option>
                                    <option value="wh">세계사</option>
                                    <option value="ah">동아시아사</option>
                                    <option value="en">경제</option>
                                    <option value="pl">정치와 법</option>
                                    <option value="sc">사회･문화</option>
                                    <option value="le">생활과윤리</option>
                                    <option value="et">윤리와사상</option>
                                </select>
                                <input type="number" class="form-control form-control-sm text-center" name="dept-selectA-score" id="dept-selectA-score" placeholder="원점수">
                            </div>
                        </div>

                        <div class="col-xl-6">
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="dept-selectB-label">탐구 2</span>
                                <select class="form-select" id="dept-selectB-type" name="dept-selectB-type">
                                    <option value="na" selected>미응시</option>
                                    <option value="p1">물리학 I</option>
                                    <option value="c1">화학 I</option>
                                    <option value="b1">생명과학 I</option>
                                    <option value="e1">지구과학 I</option>
                                    <option value="p2">물리학 II</option>
                                    <option value="c2">화학 II</option>
                                    <option value="b2">생명과학 II</option>
                                    <option value="e2">지구과학 II</option>
                                    <option value="kg">한국지리</option>
                                    <option value="wg">세계지리</option>
                                    <option value="wh">세계사</option>
                                    <option value="ah">동아시아사</option>
                                    <option value="en">경제</option>
                                    <option value="pl">정치와 법</option>
                                    <option value="sc">사회･문화</option>
                                    <option value="le">생활과윤리</option>
                                    <option value="et">윤리와사상</option>
                                </select>
                                <input type="number" class="form-control form-control-sm text-center" name="dept-selectB-score" id="dept-selectB-score" placeholder="원점수">
                            </div>
                        </div>

                        <div class="col-xl-6">
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="dept-foreignlang-label">제2외국어</span>
                                <select class="form-select" id="dept-foreignlang-type" name="dept-foreignlang-type">
                                    <option value="na" selected>미응시</option>
                                    <option value="du">독일어 I</option>
                                    <option value="fr">프랑스어 I</option>
                                    <option value="sp">스페인어 I</option>
                                    <option value="ch">중국어 I</option>
                                    <option value="jp">일본어 I</option>
                                    <option value="ru">러시아어 I</option>
                                    <option value="ar">아랍어 I</option>
                                    <option value="be">베트남어 I</option>
                                    <option value="cc">한문 I</option>
                                </select>
                                <input type="number" class="form-control form-control-sm text-center" name="dept-foreignlang-score" id="dept-foreignlang-score" placeholder="원점수">
                            </div>
                        </div>

                        <div class="col-xl-6">
                        </div>
                    </div>
                </div>
                <br>
                <div class="d-grid">
                    <button type="button" class="btn btn-outline-primary" onclick="test_dept_input()">
                        완료
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>