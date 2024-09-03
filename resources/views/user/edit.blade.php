{{-- نظرة عامة على واجهة برمجة التطبيقات مستندات وظائف
curl / libcurl / API / رموز الخطأ
رموز خطأ libcurl
ذات صلة:
جميع الوظائف
أمثلة
API
الرموز
اسم
أخطاء libcurl - رموز الخطأ في libcurl

وصف
تتضمن صفحة الدليل هذه معظم رموز الخطأ المتاحة ، إن لم يكن كلها ، في libcurl. يتم أيضا تضمين سبب حدوثها وربما ما يمكنك القيام به لإصلاح المشكلة.

كيرلكود
تقوم جميع وظائف الواجهة "السهلة" تقريبا بإرجاع رمز خطأ CURLcode. بغض النظر عن أي شيء ، يعد استخدام الخيار curl_easy_setopt CURLOPT_ERRORBUFFER فكرة جيدة لأنه يمنحك سلسلة خطأ قابلة للقراءة البشرية والتي قد تقدم مزيدا من التفاصيل حول سبب الخطأ أكثر من مجرد رمز الخطأ. يمكن استدعاء curl_easy_strerror للحصول على سلسلة خطأ من رقم CURLcode معين.

CURLcode هو واحد مما يلي:

CURLE_OK (0)

كل شيء على ما يرام. تابع كالمعتاد.

CURLE_UNSUPPORTED_PROTOCOL (1)

استخدم عنوان URL الذي مررته إلى libcurl بروتوكولا لا يدعمه libcurl هذا. قد يكون الدعم خيارا لوقت التحويل البرمجي لم تستخدمه ، أو يمكن أن يكون سلسلة بروتوكول بها أخطاء إملائية أو مجرد بروتوكول libcurl لا يحتوي على رمز له.

CURLE_FAILED_INIT (2)

فشل رمز التهيئة المبكرة. من المحتمل أن يكون هذا خطأ أو مشكلة داخلية ، أو مشكلة في الموارد حيث لا يمكن القيام بشيء أساسي في وقت البداية.

CURLE_URL_MALFORMAT (3)

لم يتم تنسيق عنوان URL بشكل صحيح.

CURLE_NOT_BUILT_IN (4)

لم يتم العثور على ميزة أو بروتوكول أو خيار مطلوب مضمنا في libcurl هذا بسبب قرار وقت الإنشاء. هذا يعني أنه لم يتم تمكين ميزة أو خيار أو تعطيله بشكل صريح عند إنشاء libcurl ولكي يعمل ، يجب عليك الحصول على libcurl معاد بناؤه.

CURLE_COULDNT_RESOLVE_PROXY (5)

تعذر حل الوكيل. تعذر حل مضيف الوكيل المحدد.

CURLE_COULDNT_RESOLVE_HOST (6)

تعذر حل المضيف. لم يتم حل المضيف البعيد المحدد.

CURLE_COULDNT_CONNECT (7)

فشل الاتصال () بالاستضافة أو الوكيل.

CURLE_WEIRD_SERVER_REPLY (8)

تعذر تحليل الخادم الذي أرسل البيانات libcurl. عرف رمز الخطأ هذا باسم CURLE_FTP_WEIRD_SERVER_REPLY قبل 7.51.0.

CURLE_REMOTE_ACCESS_DENIED (9)

تم منعنا من الوصول إلى المورد الوارد في عنوان URL. بالنسبة ل FTP ، يحدث هذا أثناء محاولة التغيير إلى الدليل البعيد.

CURLE_FTP_ACCEPT_FAILED (10)

أثناء انتظار اتصال الخادم مرة أخرى عند استخدام جلسة FTP نشطة ، تم إرسال رمز خطأ عبر اتصال التحكم أو ما شابه.

CURLE_FTP_WEIRD_PASS_REPLY (11)

بعد إرسال كلمة مرور FTP إلى الخادم ، يتوقع libcurl ردا مناسبا. يشير رمز الخطأ هذا إلى أنه تم إرجاع رمز غير متوقع.

CURLE_FTP_ACCEPT_TIMEOUT (12)

أثناء جلسة عمل FTP نشطة أثناء انتظار اتصال الخادم ، انتهت مهلة CURLOPT_ACCEPTTIMEOUT_MS (أو الإعداد الافتراضي الداخلي).

CURLE_FTP_WEIRD_PASV_REPLY (13)

فشل libcurl في الحصول على نتيجة معقولة من الخادم كاستجابة لأمر PASV أو EPSV. الخادم معيب.

CURLE_FTP_WEIRD_227_FORMAT (14)

تقوم خوادم FTP بإرجاع 227 سطرا كاستجابة لأمر PASV. إذا فشل libcurl في تحليل هذا السطر ، تمرير رمز الإرجاع هذا.

CURLE_FTP_CANT_GET_HOST (15)

فشل داخلي في البحث عن المضيف المستخدم للاتصال الجديد.

CURLE_HTTP2 (16)

تم اكتشاف مشكلة في طبقة تأطير HTTP2. هذا عام إلى حد ما ويمكن أن يكون واحدا من عدة مشاكل ، راجع المخزن المؤقت للخطأ للحصول على التفاصيل.

CURLE_FTP_COULDNT_SET_TYPE (17)

Received an error when trying to set the transfer mode to binary or ASCII.

CURLE_PARTIAL_FILE (18)

A file transfer was shorter or larger than expected. This happens when the server first reports an expected transfer size, and then delivers data that does not match the previously given size.

CURLE_FTP_COULDNT_RETR_FILE (19)

This was either a weird reply to a 'RETR' command or a zero byte transfer complete.

Obsolete error (20)

Not used in modern versions.

CURLE_QUOTE_ERROR (21)

When sending custom "QUOTE" commands to the remote server, one of the commands returned an error code that was 400 or higher (for FTP) or otherwise indicated unsuccessful completion of the command.

CURLE_HTTP_RETURNED_ERROR (22)

يتم إرجاع هذا إذا تم تعيين CURLOPT_FAILONERROR TRUE ويقوم خادم HTTP بإرجاع رمز خطأ >= 400.

CURLE_WRITE_ERROR (23)

حدث خطأ عند كتابة البيانات المستلمة إلى ملف محلي ، أو تم إرجاع خطأ إلى libcurl من رد اتصال للكتابة.

خطأ عفا عليه الزمن (24)

لا تستخدم في الإصدارات الحديثة.

CURLE_UPLOAD_FAILED (25)

فشل بدء التحميل. بالنسبة ل FTP ، رفض الخادم عادة أمر STOR. يحتوي المخزن المؤقت للخطأ عادة على شرح الخادم لذلك.

CURLE_READ_ERROR (26)

حدثت مشكلة في قراءة ملف محلي أو خطأ تم إرجاعه بواسطة رد اتصال القراءة.

CURLE_OUT_OF_MEMORY (27)

فشل طلب تخصيص ذاكرة. هذا أمر سيء للغاية والأمور مشوشة بشدة إذا حدث هذا على الإطلاق.

CURLE_OPERATION_TIMEDOUT (28)

مهلة العملية. تم الوصول إلى فترة المهلة المحددة وفقا للشروط.

خطأ قديم (29)

لا تستخدم في الإصدارات الحديثة.

CURLE_FTP_PORT_FAILED (30)

أرجع الأمر FTP PORT خطأ. يحدث هذا في الغالب عندما لا تحدد عنوانا جيدا بما يكفي ل libcurl لاستخدامه. انظر CURLOPT_FTPPORT.

CURLE_FTP_COULDNT_USE_REST (31)

أرجع الأمر FTP REST خطأ. يجب ألا يحدث هذا أبدا إذا كان الخادم عاقلا.

خطأ عفا عليه الزمن (32)

لا تستخدم في الإصدارات الحديثة.

CURLE_RANGE_ERROR (33)

الخادم لا يدعم أو يقبل طلبات النطاق.

CURLE_HTTP_POST_ERROR (34)

هذا خطأ غريب يحدث بشكل أساسي بسبب الارتباك الداخلي.

CURLE_SSL_CONNECT_ERROR (35)

حدثت مشكلة في مكان ما في مصافحة SSL / TLS. تريد حقا المخزن المؤقت للخطأ وقراءة الرسالة هناك لأنها تحدد المشكلة أكثر قليلا. يمكن أن تكون شهادات (تنسيقات الملفات والمسارات والأذونات) وكلمات المرور وغيرها.

CURLE_BAD_DOWNLOAD_RESUME (36)

تعذر استئناف التنزيل لأن الإزاحة المحددة كانت خارج حدود الملف.

CURLE_FILE_COULDNT_READ_FILE (37)

تعذر فتح ملف معطى مع FILE://. على الأرجح لأن مسار الملف لا يحدد ملفا موجودا. هل تحققت من أذونات الملف؟

CURLE_LDAP_CANNOT_BIND (38)

لا يمكن ربط LDAP. فشلت عملية ربط LDAP.

CURLE_LDAP_SEARCH_FAILED (39)

فشل بحث LDAP.

خطأ عفا عليه الزمن (40)

لا تستخدم في الإصدارات الحديثة.

CURLE_FUNCTION_NOT_FOUND (41)

لم يتم العثور على الوظيفة. لم يتم العثور على دالة zlib المطلوبة.

CURLE_ABORTED_BY_CALLBACK (42)

تم إحباطه عن طريق معاودة الاتصال. أعاد رد الاتصال "إحباط" إلى libcurl.

CURLE_BAD_FUNCTION_ARGUMENT (43)

تم استدعاء وظيفة بمعلمة سيئة.

خطأ عفا عليه الزمن (44)

لا تستخدم في الإصدارات الحديثة.

CURLE_INTERFACE_FAILED (45)

خطأ في الواجهة. تعذر استخدام واجهة صادرة محددة. قم بتعيين الواجهة التي سيتم استخدامها لعنوان IP المصدر للاتصالات الصادرة مع CURLOPT_INTERFACE.

خطأ عفا عليه الزمن (46)

لا تستخدم في الإصدارات الحديثة.

CURLE_TOO_MANY_REDIRECTS (47)

عدد كبير جدا من عمليات إعادة التوجيه. عند متابعة عمليات إعادة التوجيه ، ضرب libcurl الحد الأقصى للمبلغ. حدد الحد الخاص بك مع CURLOPT_MAXREDIRS.

CURLE_UNKNOWN_OPTION (48)

لم يتم التعرف على / معرفة الخيار الذي تم تمريره إلى libcurl. راجع الوثائق المناسبة. هذه على الأرجح مشكلة في البرنامج الذي يستخدم libcurl. قد يحتوي المخزن المؤقت للخطأ على معلومات أكثر تحديدا حول الخيار الدقيق الذي يتعلق به.

CURLE_SETOPT_OPTION_SYNTAX (49)

تم تنسيق خيار تم تمريره إلى setopt بشكل خاطئ. راجع رسالة الخطأ للحصول على تفاصيل حول الخيار.

أخطاء عفا عليها الزمن (50-51)

لا تستخدم في الإصدارات الحديثة.

CURLE_GOT_NOTHING (52)

Nothing was returned from the server, and under the circumstances, getting nothing is considered an error.

CURLE_SSL_ENGINE_NOTFOUND (53)

The specified crypto engine was not found.

CURLE_SSL_ENGINE_SETFAILED (54)

Failed setting the selected SSL crypto engine as default.

CURLE_SEND_ERROR (55)

Failed sending network data.

CURLE_RECV_ERROR (56)

Failure with receiving network data.

Obsolete error (57)

Not used in modern versions.

CURLE_SSL_CERTPROBLEM (58)

problem with the local client certificate.

CURLE_SSL_CIPHER (59)

Could not use specified cipher.

CURLE_PEER_FAILED_VERIFICATION (60)

The remote server's SSL certificate or SSH fingerprint was deemed not OK. This error code has been unified with CURLE_SSL_CACERT since 7.62.0. Its previous value was 51.

CURLE_BAD_CONTENT_ENCODING (61)

Unrecognized transfer encoding.

Obsolete error (62)

Not used in modern versions.

CURLE_FILESIZE_EXCEEDED (63)

Maximum file size exceeded.

CURLE_USE_SSL_FAILED (64)

Requested FTP SSL level failed.

CURLE_SEND_FAIL_REWIND (65)

When doing a send operation curl had to rewind the data to retransmit, but the rewinding operation failed.

CURLE_SSL_ENGINE_INITFAILED (66)

فشل بدء تشغيل مشغل SSL.

CURLE_LOGIN_DENIED (67)

رفض الخادم البعيد curl لتسجيل الدخول (تمت الإضافة في 7.13.1)

CURLE_TFTP_NOTFOUND (68)

لم يتم العثور على الملف على خادم TFTP.

CURLE_TFTP_PERM (69)

مشكلة إذن على خادم TFTP.

CURLE_REMOTE_DISK_FULL (70)

نفاد مساحة القرص على الخادم.

CURLE_TFTP_ILLEGAL (71)

عملية TFTP غير قانونية.

CURLE_TFTP_UNKNOWNID (72)

معرف نقل TFTP غير معروف.

CURLE_REMOTE_FILE_EXISTS (73)

الملف موجود بالفعل ولم يتم الكتابة فوقه.

CURLE_TFTP_NOSUCHUSER (74)

يجب ألا يتم إرجاع هذا الخطأ بواسطة خادم TFTP يعمل بشكل صحيح.

خطأ عفا عليه الزمن (75-76)

لا تستخدم في الإصدارات الحديثة.

CURLE_SSL_CACERT_BADFILE (77)

مشكلة في قراءة شهادة SSL CA (المسار؟ حقوق الوصول؟)

CURLE_REMOTE_FILE_NOT_FOUND (78)

المورد المشار إليه في عنوان URL غير موجود.

CURLE_SSH (79)

حدث خطأ غير محدد أثناء جلسة SSH.

CURLE_SSL_SHUTDOWN_FAILED (80)

فشل في إيقاف تشغيل اتصال SSL.

CURLE_AGAIN (81)

المقبس غير جاهز للإرسال / الاسترجاع. انتظر حتى يصبح جاهزا وحاول مرة أخرى. يتم إرجاع رمز الإرجاع هذا فقط من curl_easy_recv و curl_easy_send (أضيف في 7.18.2)

CURLE_SSL_CRL_BADFILE (82)

فشل تحميل ملف CRL (أضيف في 7.19.0)

CURLE_SSL_ISSUER_ERROR (83)

فشل التحقق من المصدر (أضيف في 7.19.0)

CURLE_FTP_PRET_FAILED (84)

لا يفهم خادم FTP الأمر PRET على الإطلاق أو لا يدعم الوسيطة المحددة. كن حذرا عند استخدام CURLOPT_CUSTOMREQUEST ، يتم إرسال أمر LIST مخصص مع الأمر PRET قبل PASV أيضا. (أضيف في 7.20.0)

CURLE_RTSP_CSEQ_ERROR (85)

Mismatch of RTSP CSeq numbers.

CURLE_RTSP_SESSION_ERROR (86)

Mismatch of RTSP Session Identifiers.

CURLE_FTP_BAD_FILE_LIST (87)

Unable to parse FTP file list (during FTP wildcard downloading).

CURLE_CHUNK_FAILED (88)

Chunk callback reported error.

CURLE_NO_CONNECTION_AVAILABLE (89)

(For internal use only, is never returned by libcurl) No connection available, the session is queued. (added in 7.30.0)

CURLE_SSL_PINNEDPUBKEYNOTMATCH (90)

Failed to match the pinned key specified with CURLOPT_PINNEDPUBLICKEY.

CURLE_SSL_INVALIDCERTSTATUS (91)

Status returned failure when asked with CURLOPT_SSL_VERIFYSTATUS.

CURLE_HTTP2_STREAM (92)

Stream error in the HTTP/2 framing layer.

CURLE_RECURSIVE_API_CALL (93)

An API function was called from inside a callback.

CURLE_AUTH_ERROR (94)

An authentication function returned an error.

CURLE_HTTP3 (95)

A problem was detected in the HTTP/3 layer. This is somewhat generic and can be one out of several problems, see the error buffer for details.

CURLE_QUIC_CONNECT_ERROR (96)

QUIC connection error. This error may be caused by an SSL library error. QUIC is the protocol used for HTTP/3 transfers.

CURLE_PROXY (97)

Proxy handshake error. CURLINFO_PROXY_ERROR provides extra details on the specific problem.

CURLE_SSL_CLIENTCERT (98)

SSL Client Certificate required.

CURLE_UNRECOVERABLE_POLL (99)

An internal call to poll() or select() returned error that is not recoverable.

CURLE_TOO_LARGE (100)

A value or data field grew larger than allowed.

CURLE_ECH_REQUIRED (101)

ECH was attempted but failed.

Curlmcode
This is the generic return code used by functions in the libcurl multi interface. Also consider curl_multi_strerror.

CURLM_CALL_MULTI_PERFORM (-1)

This is not really an error. It means you should call curl_multi_perform again without doing select() or similar in between. Before version 7.20.0 (released on February 9 2010) this could be returned by curl_multi_perform, but in later versions this return code is never used.

CURLM_OK (0)

Things are fine.

CURLM_BAD_HANDLE (1)

The passed-in handle is not a valid CURLM handle.

CURLM_BAD_EASY_HANDLE (2)

An easy handle was not good/valid. It could mean that it is not an easy handle at all, or possibly that the handle already is in use by this or another multi handle.

CURLM_OUT_OF_MEMORY (3)

You are doomed.

CURLM_INTERNAL_ERROR (4)

This can only be returned if libcurl bugs. Please report it to us!

CURLM_BAD_SOCKET (5)

المقبس الذي تم تمريره ليس صالحا يعرفه libcurl بالفعل. (أضيف في 7-15-4)

CURLM_UNKNOWN_OPTION (6)

curl_multi_setopt() مع خيار غير مدعوم (أضيف في 7.15.4)

CURLM_ADDED_ALREADY (7)

تمت محاولة إضافة مقبض سهل تمت إضافته بالفعل إلى مقبض متعدد مرة ثانية. (أضيف في 7-32-1)

CURLM_RECURSIVE_API_CALL (8)

تم استدعاء وظيفة API من داخل رد الاتصال.

CURLM_WAKEUP_FAILURE (9)

التنبيه غير متوفر أو فشل.

CURLM_BAD_FUNCTION_ARGUMENT (10)

تم استدعاء وظيفة بمعلمة سيئة.

CURLM_ABORTED_BY_CALLBACK (11)

أرجع رد اتصال متعدد المقابض خطأ.

CURLM_UNRECOVERABLE_POLL (12)

تم إرجاع استدعاء داخلي للاستقصاء () أو تحديد () خطأ غير قابل للاسترداد.

كيرلشكود
تقوم واجهة "المشاركة" بإرجاع رمز CURLSHcode للإشارة إلى حدوث خطأ. ضع في اعتبارك أيضا curl_share_strerror.

CURLSHE_OK (0)

كل شيء على ما يرام. تابع كالمعتاد.

CURLSHE_BAD_OPTION (1)

تم تمرير خيار غير صالح إلى الوظيفة.

CURLSHE_IN_USE (2)

كائن المشاركة قيد الاستخدام حاليا.

CURLSHE_INVALID (3)

تم تمرير كائن مشاركة غير صالح إلى الدالة.

CURLSHE_NOMEM (4)

لم تكن الذاكرة كافية متاحة. (أضيف في 7.12.0)

CURLSHE_NOT_BUILT_IN (5)

تعذر إجراء المشاركة المطلوبة لأن المكتبة التي تستخدمها لم يتم تمكين هذه الميزة المحددة. (أضيف في 7.23.0)

كورلوكود
ترجع واجهة URL رمز CURLUcode للإشارة إلى حدوث خطأ. ضع في اعتبارك أيضا curl_url_strerror.

CURLUE_OK (0)

كل شيء على ما يرام. تابع كالمعتاد.

CURLUE_BAD_HANDLE (1)

An invalid URL handle was passed as argument.

CURLUE_BAD_PARTPOINTER (2)

An invalid 'part' argument was passed as argument.

CURLUE_MALFORMED_INPUT (3)

A malformed input was passed to a URL API function.

CURLUE_BAD_PORT_NUMBER (4)

The port number was not a decimal number between 0 and 65535.

CURLUE_UNSUPPORTED_SCHEME (5)

This libcurl build does not support the given URL scheme.

CURLUE_URLDECODE (6)

URL decode error, most likely because of rubbish in the input.

CURLUE_OUT_OF_MEMORY (7)

A memory function failed.

CURLUE_USER_NOT_ALLOWED (8)

Credentials was passed in the URL when prohibited.

CURLUE_UNKNOWN_PART (9)

An unknown part ID was passed to a URL API function.

CURLUE_NO_SCHEME (10)

There is no scheme part in the URL.

CURLUE_NO_USER (11)

There is no user part in the URL.

CURLUE_NO_PASSWORD (12)

There is no password part in the URL.

CURLUE_NO_OPTIONS (13)

There is no options part in the URL.

CURLUE_NO_HOST (14)

There is no host part in the URL.

CURLUE_NO_PORT (15)

There is no port part in the URL.

CURLUE_NO_QUERY (16)

There is no query part in the URL.

CURLUE_NO_FRAGMENT (17)

There is no fragment part in the URL.

CURLUE_NO_ZONEID (18)

There is no zone id set in the URL.

CURLUE_BAD_FILE_URL (19)

The file:// URL is invalid.

CURLUE_BAD_FRAGMENT (20)

The fragment part of the URL contained bad or invalid characters.

CURLUE_BAD_HOSTNAME (21)

The hostname contained bad or invalid characters.

CURLUE_BAD_IPV6 (22)

The IPv6 address hostname contained bad or invalid characters.

CURLUE_BAD_LOGIN (23)

The login part of the URL contained bad or invalid characters.

CURLUE_BAD_PASSWORD (24)

The password part of the URL contained bad or invalid characters.

CURLUE_BAD_PATH (25)

The path part of the URL contained bad or invalid characters.

CURLUE_BAD_QUERY (26)

احتوى جزء طلب البحث في عنوان URL على أحرف غير صالحة أو غير صالحة.

CURLUE_BAD_SCHEME (27)

احتوى جزء المخطط من عنوان URL على أحرف سيئة أو غير صالحة.

CURLUE_BAD_SLASHES (28)

احتوى عنوان URL على عدد غير صالح من الشرطة المائلة.

CURLUE_BAD_USER (29)

يحتوي جزء المستخدم من عنوان URL على أحرف غير صالحة أو غير صالحة.

CURLUE_LACKS_IDN (30)

يفتقر libcurl إلى دعم IDN.

CURLUE_TOO_LARGE (31)

القيمة أو حقل البيانات أكبر من المسموح به.

كيرلكود
ترجع واجهة الرأس رمز CURLHcode للإشارة إلى حدوث خطأ.

CURLHE_OK (0)

كل شيء على ما يرام. تابع كالمعتاد.

CURLHE_BADINDEX (1)

لا يوجد رأس مع الفهرس المطلوب.

CURLHE_MISSING (2)

لا يوجد مثل هذا الرأس.

CURLHE_NOHEADERS (3)

لم يتم تسجيل أي رؤوس على الإطلاق.

CURLHE_NOREQUEST (4)

لم يكن هناك رقم طلب من هذا القبيل.

CURLHE_OUT_OF_MEMORY (5)

نفاد الموارد

CURLHE_BAD_ARGUMENT (6)

واحدة أو أكثر من الحجج المعطاة سيئة.

CURLHE_NOT_BUILT_IN (7)

تم تعطيل دعم HTTP أو واجهة برمجة تطبيقات الرأس في الإنشاء.

انظر أيضا
CURLOPT_DEBUGFUNCTION(3)، CURLOPT_ERRORBUFFER(3)، CURLOPT_VERBOSE(3)، curl_easy_strerror(3)، curl_multi_strerror(3)، curl_share_strerror(3)، curl_url_strerror(3)

تم إنشاء صفحة HTML هذه باستخدام roffit. --}}
