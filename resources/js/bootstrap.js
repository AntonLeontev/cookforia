import axios from "axios";
window.axios = axios;

window.axios.defaults.headers.common["X-Requested-With"] = "XMLHttpRequest";

import datepicker from "js-datepicker";
window.datepicker = datepicker;
