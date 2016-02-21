@extends('layouts.base')

@section('title')
    Register
@endsection

@section('content')
    <div class="jumbotron index-container">
        <h1>Join Rels</h1>
        <div class="form-container">
            <form>
                <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                </div>
                <div class="form-group">
                    <label for="password-confirm">Confirm Password</label>
                    <input type="password" class="form-control" id="password-confirm" name="password-confirm" placeholder="Confirm Password">
                </div>
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Name">
                </div>
                <div class="form-group">
                    <label for="surname">Surname</label>
                    <input type="text" class="form-control" id="surname" name="surname" placeholder="Surname">
                </div>
                <div class="form-group">
                    <label for="gender">Gender</label>
                    <select id="gender" class="form-control" name="gender">
                        <option selected="selected"> - Gender - </option>
                        <option value="male">Male</option>
                        <option value="female">Female</option>
                        <option value="other">Other</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="interested-in">I'm interested in</label>
                    <select id="interested-in" class="form-control" name="interested-in">
                        <option selected="selected"> - Interested in - </option>
                        <option value="male">Male</option>
                        <option value="female">Female</option>
                        <option value="other">Other</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="birth_date">Birth date:</label>
                    <select id="month" class="form-control bottom-margin" name="birth_date">
                        <option selected="selected"> - Month - </option>
                        <option value="January">January</option>
                        <option value="Febuary">Febuary</option>
                        <option value="March">March</option>
                        <option value="April">April</option>
                        <option value="May">May</option>
                        <option value="June">June</option>
                        <option value="July">July</option>
                        <option value="August">August</option>
                        <option value="September">September</option>
                        <option value="October">October</option>
                        <option value="November">November</option>
                        <option value="December">December</option>
                    </select>
                    <select id="day" class="form-control bottom-margin" name="birth_date">
                        <option selected="selected"> - Day - </option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                        <option value="9">9</option>
                        <option value="10">10</option>
                        <option value="11">11</option>
                        <option value="12">12</option>
                        <option value="13">13</option>
                        <option value="14">14</option>
                        <option value="15">15</option>
                        <option value="16">16</option>
                        <option value="17">17</option>
                        <option value="18">18</option>
                        <option value="19">19</option>
                        <option value="20">20</option>
                        <option value="21">21</option>
                        <option value="22">22</option>
                        <option value="23">23</option>
                        <option value="24">24</option>
                        <option value="25">25</option>
                        <option value="26">26</option>
                        <option value="27">27</option>
                        <option value="28">28</option>
                        <option value="29">29</option>
                        <option value="30">30</option>
                        <option value="31">31</option>
                    </select>
                    <select id="year" class="form-control bottom-margin" name="birth_date">
                        <option value="year" selected="selected"> - Year - </option>
                        <option value="1996">1996</option>
                        <option value="1995">1995</option>
                        <option value="1994">1994</option>
                        <option value="1993">1993</option>
                        <option value="1992">1992</option>
                        <option value="1991">1991</option>
                        <option value="1990">1990</option>
                        <option value="1989">1989</option>
                        <option value="1988">1988</option>
                        <option value="1987">1987</option>
                        <option value="1986">1986</option>
                        <option value="1985">1985</option>
                        <option value="1984">1984</option>
                        <option value="1983">1983</option>
                        <option value="1982">1982</option>
                        <option value="1981">1981</option>
                        <option value="1980">1980</option>
                        <option value="1979">1979</option>
                        <option value="1978">1978</option>
                        <option value="1977">1977</option>
                        <option value="1976">1976</option>
                        <option value="1975">1975</option>
                        <option value="1974">1974</option>
                        <option value="1973">1973</option>
                        <option value="1972">1972</option>
                        <option value="1971">1971</option>
                        <option value="1970">1970</option>
                        <option value="1969">1969</option>
                        <option value="1968">1968</option>
                        <option value="1967">1967</option>
                        <option value="1966">1966</option>
                        <option value="1965">1965</option>
                        <option value="1964">1964</option>
                        <option value="1963">1963</option>
                        <option value="1962">1962</option>
                        <option value="1961">1961</option>
                        <option value="1960">1960</option>
                        <option value="1959">1959</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="location">Location</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Name">
                </div>
                <div class="form-group">
                    <label for="interests">Interests</label>
                    <div class="checkbox">
                        <label>
                            <input type="checkbox"> Listening to music
                        </label>
                    </div>
                    <div class="checkbox">
                        <label>
                            <input type="checkbox"> Sports
                        </label>
                    </div>
                    <div class="checkbox">
                        <label>
                            <input type="checkbox"> Art
                        </label>
                    </div>
                    <div class="checkbox">
                        <label>
                            <input type="checkbox"> Technologies
                        </label>
                    </div>
                    <div class="checkbox">
                        <label>
                            <input type="checkbox"> Science
                        </label>
                    </div>
                    <div class="checkbox">
                        <label>
                            <input type="checkbox"> Reading books
                        </label>
                    </div>
                </div>
                <div class="form-group">
                  <label for="comment">About me</label>
                  <textarea class="form-control" rows="5" id="comment"></textarea>
                </div>

                <label for="basic-url">Profile photo URL</label>
                <div class="input-group bottom-margin">
                    <span class="input-group-addon" id="basic-addon3">Add your profile photo</span>
                    <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3">
                </div>

                <button type="submit" class="btn btn-default btn-red">Join Rels!</button>
            </form>
        </div>
    </div>
@endsection