<?php
    /**
 * The MIT License (MIT)
 *
 * Copyright (c) 2016 Alorel, https://github.com/Alorel
 *
 * Permission is hereby granted, free of charge, to any person obtaining a copy of this software and associated 
 * documentation files (the "Software"), to deal in the Software without restriction, including without limitation the 
 * rights to use, copy, modify, merge, publish, distribute, sublicense, and/or sell copies of the Software, and to permit 
 * persons to whom the Software is furnished to do so, subject to the following conditions:
 *
 * The above copyright notice and this permission notice shall be included in all copies or substantial portions of the
 * Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, INCLUDING BUT 
 * NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND 
 * NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, 
 * DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, 
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.
 */

    namespace Alorel\Dropbox\Operation\Files\UploadSession;

    use Alorel\Dropbox\OperationKind\ContentUploadOperation;
    use Alorel\Dropbox\OptionBuilder\UploadSession\UploadSessionActiveOptions;

    /**
     * Upload sessions allow you to upload a single file using multiple requests. This call starts a new upload
     * session with the given data. You can then use upload_session/append to add more data and upload_session/finish
     * to save all the data to a file in Dropbox.
     * <br/><br/>
     * A single request should not upload more than 150 MB of file contents.
     *
     * @author Art <a.molcanovas@gmail.com>
     * @see    https://www.dropbox.com/developers/documentation/http/documentation#files-upload_session-start
     * @see    https://www.dropbox.com/developers/documentation/http/documentation#files-upload_session-append_v2
     * @see    https://www.dropbox.com/developers/documentation/http/documentation#files-upload_session-finish
     * @see    Append
     * @see    Finish
     */
    class Start extends ContentUploadOperation {

        /**
         * Perform the operation
         *
         * @author Art <a.molcanovas@gmail.com>
         *
         * @param string|resource|\Psr\Http\Message\StreamInterface $data    The file contents. Can be a string, a fopen()
         *                                                                   resource or an instance of StreamInterface
         * @param UploadSessionActiveOptions|null                   $options Additional options
         *
         * @return \GuzzleHttp\Promise\PromiseInterface|\Psr\Http\Message\ResponseInterface The promise interface if
         *                                                                                  async is set to true and the
         *                                                                                  request interface if it is
         *                                                                                  set to false
         * @throws \GuzzleHttp\Exception\ClientException
         */
        function perform($data, UploadSessionActiveOptions $options = null) {
            return $this->send('files/upload_session/start', null, $data, $options);
        }
    }