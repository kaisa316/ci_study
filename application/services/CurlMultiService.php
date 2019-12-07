<?php

class CurlMultiService {
    /**
     * curl multi 并发获取多个url请求
     *
     * @param $url_arr key=>value 对
     * @return array
     */
    protected function curl_multi_get_data($url_arr)
    {
        $multi_ch = curl_multi_init();
        $ch_list  = [];
        $data     = [];
        foreach ($url_arr as $key => $url) {
            $ch_list[$key] = curl_init($url);
            curl_setopt($ch_list[$key], CURLOPT_RETURNTRANSFER, TRUE);
            curl_multi_add_handle($multi_ch, $ch_list[$key]);
        }
        $active = NULL;
        do {
            $status = curl_multi_exec($multi_ch, $active);
            if ($active) {
                // Wait a short time for more activity
                curl_multi_select($multi_ch);
            }
        } while ($active && $status == CURLM_OK);
        foreach ($ch_list as $key => $ch) {
            $data[$key] = curl_multi_getcontent($ch);
            curl_multi_remove_handle($multi_ch, $ch);
            curl_close($ch);
        }
        curl_multi_close($multi_ch);

        return $data;
    }

}


