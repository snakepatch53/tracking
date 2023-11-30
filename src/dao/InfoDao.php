<?php
class InfoDao
{
    private MysqlAdapter $mysqlAdapter;
    public function __construct(MysqlAdapter $mysqlAdapter)
    {
        $this->mysqlAdapter = $mysqlAdapter;
    }

    public function getLastId()
    {
        return $this->mysqlAdapter->getLastId();
    }

    public function select()
    {
        $result = $this->mysqlAdapter->query("SELECT * FROM info");
        $row = mysqli_fetch_assoc($result);
        return $this->schematize($row);
    }

    // public function update(
    //     string $info_name,
    //     string $info_country,
    //     string $info_state,
    //     string $info_city,
    //     string $info_whatsapp,
    //     string $info_location,
    //     string $info_desc,
    //     string $info_mision,
    //     string $info_vision,
    //     string $info_logo,
    //     string $info_icon,
    //     string $info_fb_app_id,
    //     string $info_fb_app_secret,
    //     string $info_fb_page_id,
    //     string $info_fb_access_token,
    //     string $info_home_title,
    //     string $info_home_subtitle,
    //     string $info_services_title,
    //     string $info_services_subtitle,
    //     string $info_services_image,
    //     string $info_portfolio_title,
    //     string $info_portfolio_subtitle,
    //     string $info_portfolio_image,
    //     string $info_about_title,
    //     string $info_about_subtitle,
    //     string $info_about_image,
    //     string $theme_id
    // ) {
    //     $info_name = addSlashes($info_name);
    //     $info_country = addSlashes($info_country);
    //     $info_state = addSlashes($info_state);
    //     $info_city = addSlashes($info_city);
    //     $info_location = addSlashes($info_location);
    //     $info_desc = addSlashes($info_desc);
    //     $info_mision = addSlashes($info_mision);
    //     $info_vision = addSlashes($info_vision);
    //     $info_home_title = addSlashes($info_home_title);
    //     $info_home_subtitle = addSlashes($info_home_subtitle);
    //     $info_services_title = addSlashes($info_services_title);
    //     $info_services_subtitle = addSlashes($info_services_subtitle);
    //     $info_portfolio_title = addSlashes($info_portfolio_title);
    //     $info_portfolio_subtitle = addSlashes($info_portfolio_subtitle);
    //     $info_about_title = addSlashes($info_about_title);
    //     $info_about_subtitle = addSlashes($info_about_subtitle);
    //     $info_last = date('Y-m-d H:i:s');
    //     return $this->mysqlAdapter->query("
    //         UPDATE info SET 
    //             info_name = '$info_name',
    //             info_country = '$info_country',
    //             info_state = '$info_state',
    //             info_city = '$info_city',
    //             info_whatsapp = '$info_whatsapp',
    //             info_location = '$info_location',
    //             info_desc = '$info_desc',
    //             info_mision = '$info_mision',
    //             info_vision = '$info_vision',
    //             info_logo = '$info_logo',
    //             info_icon = '$info_icon',
    //             info_fb_app_id = '$info_fb_app_id',
    //             info_fb_app_secret = '$info_fb_app_secret',
    //             info_fb_page_id = '$info_fb_page_id',
    //             info_fb_access_token = '$info_fb_access_token',
    //             info_home_title = '$info_home_title',
    //             info_home_subtitle = '$info_home_subtitle',
    //             info_services_title = '$info_services_title',
    //             info_services_subtitle = '$info_services_subtitle',
    //             info_services_image = '$info_services_image',
    //             info_portfolio_title = '$info_portfolio_title',
    //             info_portfolio_subtitle = '$info_portfolio_subtitle',
    //             info_portfolio_image = '$info_portfolio_image',
    //             info_about_title = '$info_about_title',
    //             info_about_subtitle = '$info_about_subtitle',
    //             info_about_image = '$info_about_image',
    //             theme_id = '$theme_id',
    //             info_last = '$info_last'
    //     ");
    // }

    private function schematize($row)
    {
        return $row;
    }
}
