<div class="sig-in-content-block">
    <div class="container">
        <h2>Запишитесь на мастер-класс</h2>
        <h3>Стандартный мастер-класс длится 3 часа. При бронировании необходимо указать дату и время начала
            мероприятия.</h3>

        <div class="sig-in-form-container">
            <form action="{{ route('signin.request') }}" method="post" id="bottom-form">
                <div class="form-fields">
                    @csrf        
					<input type="hidden" name="metrika_client_id">    
                    <input name="document_referrer" type="hidden" hidden="hidden" value="{{ Request::url() }}">
                    <input name="utm_source" type="hidden" hidden="hidden" value="{{ Request::url() }}">
                    <input name="utm_medium" type="hidden" hidden="hidden" value="">
                    <input name="utm_campaign" type="hidden" hidden="hidden" value="">
                    <input name="utm_content" type="hidden" hidden="hidden" value="">
                    <input name="utm_term" type="hidden" hidden="hidden" value="">
                    <input class="form-input" type="text" name="name" placeholder="Имя" required>
                    <input class="form-input input-phone" type="text" name="phone" placeholder="Телефон" required>
                    <input class="form-btn" type="submit" value="Отправить заявку!">

					<div id="bottom-captcha-container"></div>
                </div>
                <div class="form-success">
                    Ваша заявка принята!
                </div>
            </form>

        </div>

        <div class="sig-in-policy-text">
            Нажимая на кнопку, вы даете согласие на обработку персональных данных и
            соглашаетесь с <a href="/policy.pdf">политикой конфиденциальности</a>.
        </div>
    </div>
</div>
