<div class="main-form">
    <div class="container">
        <div class="main-form-container">
            <form action="{{ route('main.request') }}" method="post" id="main-form">
                <div class="form-fields">
                    @csrf
					<input type="hidden" name="metrika_client_id">
                    <input name="document_referrer" type="hidden" hidden="hidden" value="{{ Request::url() }}">
                    <input name="utm_source" type="hidden" hidden="hidden" value="{{ Request::url() }}">
                    <input name="utm_medium" type="hidden" hidden="hidden" value="">
                    <input name="utm_campaign" type="hidden" hidden="hidden" value="">
                    <input name="utm_content" type="hidden" hidden="hidden" value="">
                    <input name="utm_term" type="hidden" hidden="hidden" value="">
                    <input class="form-input input-phone" type="text" name="phone" placeholder="Телефон" required>
                    <button class="form-btn" type="submit">Отправить заявку!</button>

					<div id="captcha-container"></div>

                </div>
                <div class="form-success">
                    Ваша заявка принята!
                </div>
            </form>
        </div>
        <div class="policy-text">
            Нажимая на кнопку, вы даете согласие на обработку персональных данных и
            соглашаетесь с <a href="/policy.pdf">политикой конфиденциальности</a>.
        </div>
    </div>
</div>
