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
                <h3 class="pb-3 border-bottom">학과 선택</h3>
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <h5>분류</h5>
                        <select class="form-select" size="5">
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
                            <option value="st">통계</option>

                            <option value="sc">과학</option>
                            <option value="co">컴퓨터</option>
                            <option value="mc">기계</option>
                            <option value="el">전기</option>
                            <option value="as">항공우주</option>
                            <option value="nm">신소재</option>
                            <option value="ca">자동차</option>
                            <option value="ar">건축</option>

                            <option value="hi">역사</option>
                            <option value="ph">철학</option>
                            <option value="re">종교</option>
                            <option value="at">예술</option>

                            <option value="ng">국방</option>
                            <option value="nw">국제</option>
                            <option value="so">사회</option>
                            <option value="ec">환경</option>
                            <option value="ga">원예</option>
                            <option value="fu">융합</option>
                            <option value="fr">자율</option>
                        </select>
                    </div>

                    <div class="col-md-6 mb-3">
                        <h5>세부 분류</h5>
                        <select class="form-select" size="5">
                            <option value="be">분류를 선택해주세요</option>
                        </select>
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
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="dept-korean-label">국어&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
                                <select class="form-select" id="dept-korean-type">
                                    <option value="na" selected>미응시</option>
                                    <option value="tw">화법과작문</option>
                                    <option value="lm">언어와매체</option>
                                </select>
                                <input type="number" class="form-control form-control-sm text-center" name="dept-korean-score" id="dept-korean-score" placeholder="원점수">
                            </div>
                        </div>

                        <div class="col-xl-6">
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="dept-math-label">수학&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
                                <select class="form-select" id="dept-math-type">
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
                                <span class="input-group-text" id="dept-english-label">영어&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
                                <select class="form-select" id="dept-english-type">
                                    <option value="na" selected>미응시</option>
                                    <option value="at">응시</option>
                                </select>
                                <input type="number" class="form-control form-control-sm text-center" name="dept-english-score" id="dept-english-score" placeholder="원점수">
                            </div>
                        </div>

                        <div class="col-xl-6">
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="dept-history-label">한국사&nbsp;&nbsp;&nbsp;&nbsp;</span>
                                <select class="form-select" id="dept-history-type" disabled>
                                    <option value="at" selected>필수</option>
                                </select>
                                <input type="number" class="form-control form-control-sm text-center" name="dept-history-score" id="dept-history-score" placeholder="원점수">
                            </div>
                        </div>

                        <div class="col-xl-6">
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="dept-selectA-label">탐구 1&nbsp;&nbsp;&nbsp;&nbsp;</span>
                                <select class="form-select" id="dept-selectA-type">
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
                                <span class="input-group-text" id="dept-selectB-label">탐구 2&nbsp;&nbsp;&nbsp;&nbsp;</span>
                                <select class="form-select" id="dept-selectB-type">
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
                                <select class="form-select" id="dept-foreignlang-type">
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