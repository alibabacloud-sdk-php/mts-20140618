<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mts\V20140618\Models\QueryMediaCensorJobListResponseBody\mediaCensorJobList\mediaCensorJob\coverImageCensorResults\coverImageCensorResult\results;

use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @description The labels of the moderation result. Separate multiple labels with commas (,).
     *
     *   Valid values in the pornographic content moderation scenario:
     *
     *   **normal**: normal content
     *   **sexy**: sexy content
     *   **porn**: pornographic content
     *
     *   Valid values in the terrorist content moderation scenario:
     *
     *   **normal**: normal content
     *   **bloody**: bloody content
     *   **explosion**: explosion and smoke
     *   **outfit**: special costume
     *   **logo**: special logo
     *   **weapon**: weapon
     *   **politics**: political content
     *   **violence**: violence
     *   **crowd**: crowd
     *   **parade**: parade
     *   **carcrash**: car accident
     *   **flag**: flag
     *   **location**: landmark
     *   **others**: other content
     *
     *   Valid values in the ad moderation scenario:
     *
     *   **normal**: normal content
     *   **ad**: other ads
     *   **politics**: political content in text
     *   **porn**: pornographic content in text
     *   **abuse**: abuse in text
     *   **terrorism**: terrorist content in text
     *   **contraband**: prohibited content in text
     *   **spam**: spam in text
     *   **npx**: illegal ads
     *   **qrcode**: QR code
     *   **programCode**: mini program code
     *
     *   Valid values in the live moderation scenario:
     *
     *   **normal**: normal content
     *   **meaningless**: meaningless content, such as a black or white screen
     *   **PIP**: picture-in-picture
     *   **smoking**: smoking
     *   **drivelive**: live broadcasting in a running vehicle
     *
     *   Valid values in the logo moderation scenario:
     *
     *   **normal**: normal content
     *   **TV**: controlled TV station logo
     *   **trademark**: trademark
     *
     * @example normal
     *
     * @var string
     */
    public $label;

    /**
     * @description The score. Valid values: 0 to 100.
     *
     * @example 100
     *
     * @var string
     */
    public $rate;

    /**
     * @description The moderation scenario. Valid values:
     *
     *   **porn**: pornographic content moderation
     *   **terrorism**: terrorist content moderation
     *   **ad**: ad violation moderation
     *   **live**: undesirable scene moderation
     *   **logo**: special logo moderation
     *
     * @example live
     *
     * @var string
     */
    public $scene;

    /**
     * @description The overall result of the job. Valid values:
     *
     *   **pass**: The content passes the moderation.
     *   **review**: The content needs to be manually reviewed again.
     *   **block**: The content needs to be blocked.
     *
     * > If the moderation result of any type of the moderated content is review, the overall result is review. If the moderation result of any type of the moderated content is block, the overall result is block.
     * @example pass
     *
     * @var string
     */
    public $suggestion;
    protected $_name = [
        'label'      => 'Label',
        'rate'       => 'Rate',
        'scene'      => 'Scene',
        'suggestion' => 'Suggestion',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->label) {
            $res['Label'] = $this->label;
        }
        if (null !== $this->rate) {
            $res['Rate'] = $this->rate;
        }
        if (null !== $this->scene) {
            $res['Scene'] = $this->scene;
        }
        if (null !== $this->suggestion) {
            $res['Suggestion'] = $this->suggestion;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return result
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Label'])) {
            $model->label = $map['Label'];
        }
        if (isset($map['Rate'])) {
            $model->rate = $map['Rate'];
        }
        if (isset($map['Scene'])) {
            $model->scene = $map['Scene'];
        }
        if (isset($map['Suggestion'])) {
            $model->suggestion = $map['Suggestion'];
        }

        return $model;
    }
}
