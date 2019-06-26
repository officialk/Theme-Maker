<div class="row container center">
    <div class="col s12 m12 l12">
        <!--        cards-->
        <div class="col s12 m4 l4">
            <div class="card theme darken-1">
                <div class="card-content">
                    <span class="card-title">Card Title</span>
                    <p>I am a very simple card. I am good at containing small bits of information.
                        I am convenient because I require little markup to use effectively.</p>
                </div>
                <div class="card-action">
                    <a href="#">This is a link</a>
                    <a href="#">This is a link</a>
                </div>
            </div>
        </div>
        <div class="col s12 m4 l4">
            <div class="card theme darken-1">
                <div class="card-content">
                    <span class="card-title">Card Title</span>
                    <p>I am a very simple card. I am good at containing small bits of information.
                        I am convenient because I require little markup to use effectively.</p>
                </div>
                <div class="card-action">
                    <a href="#">This is a link</a>
                    <a href="#">This is a link</a>
                </div>
            </div>
        </div>
        <div class="col s12 m4 l4">
            <div class="card theme darken-1">
                <div class="card-content">
                    <span class="card-title">Card Title</span>
                    <p>I am a very simple card. I am good at containing small bits of information.
                        I am convenient because I require little markup to use effectively.</p>
                </div>
                <div class="card-action">
                    <a href="#">This is a link</a>
                    <a href="#">This is a link</a>
                </div>
            </div>
        </div>
    </div>
    <div class="col s12 m12 l12 ">
        <div>
            <!--        table-->
            <table>
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Item Name</th>
                        <th>Item Price</th>
                    </tr>
                </thead>

                <tbody>
                    <tr>
                        <td>Alvin</td>
                        <td>Eclair</td>
                        <td>$0.87</td>
                    </tr>
                    <tr>
                        <td>Alan</td>
                        <td>Jellybean</td>
                        <td>$3.76</td>
                    </tr>
                    <tr>
                        <td>Jonathan</td>
                        <td>Lollipop</td>
                        <td>$7.00</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <div class="col s12 m12 l12 center">
        <!--        pagination-->
        <ul class="pagination">
            <li class="disabled"><a href="#!"><i class="icons">chevron_left</i></a></li>
            <li class="active theme"><a class="modal-trigger" href="#modalForm">1</a></li>
            <li class="waves-effect"><a href="#!">2</a></li>
            <li class="waves-effect"><a href="#!">3</a></li>
            <li class="waves-effect"><a href="#!">4</a></li>
            <li class="waves-effect"><a href="#!">5</a></li>
            <li class="waves-effect"><a href="#!"><i class="icons">chevron_right</i></a></li>
        </ul>
    </div>
    <!--        modals-->
    <div class="modal" id="modalForm">
        <!--        Form-->
        <div class="modal-content">
            <div class="row">
                <form class="col s12 m12 l12">
                    <div class="input-field col s12 m6 l4">
                        <i class="icons prefix">account_circle</i>
                        <input id="icon_prefix" type="text" class="validate">
                        <label for="icon_prefix">Name</label>
                    </div>
                    <div class="input-field col s12 m6 l4">
                        <i class="icons prefix">phone</i>
                        <input id="icon_telephone" type="tel" class="validate">
                        <label for="icon_telephone">Telephone</label>
                    </div>
                    <div class="input-field col s12 m6 l4">
                        <i class="icons prefix">mail</i>
                        <input id="icon_telephone" type="email" class="validate">
                        <label for="icon_telephone">Email</label>
                    </div>
                    <div class="input-field col s12 m12 l12">
                        <textarea id="textarea2" class="materialize-textarea" data-length="120"></textarea>
                        <label for="textarea2">Describe Yourself</label>
                    </div>
                </form>
            </div>
        </div>
        <div class="modal-footer">
            <div class="col s12 m3 l3"></div>
            <div class="col s12 m6 l6">
                <div class="col s12 m6 l6">
                    <a class="btn theme modal-trigger modal-close"><i class="icons themeText">close</i>Cancel</a>
                </div>
                <div class="col s12 m6 l6">
                    <a class="btn theme modal-trigger modal-close"><i class="icons themeText">send</i>Submit</a>
                </div>
            </div>
            <div class="col s12 m3 l3"></div>
        </div>
    </div>
</div>
<div class="row container center">
    <div class="col s12 m3 l4"></div>
    <div class="col s12 m6 l4">
        <div class="col s12 m6 l6">
            <div class="btn-floating theme" onclick="decision(1);"><i class="icons themeText">sentiment_very_satisfied</i></div>
        </div>
        <div class="col s12 m6 l6">
            <div class="btn-floating theme" onclick="decision(0);"><i class="icons themeText">sentiment_very_dissatisfied</i></div>
        </div>
    </div>
    <div class="col s12 m3 l4"></div>
</div>
